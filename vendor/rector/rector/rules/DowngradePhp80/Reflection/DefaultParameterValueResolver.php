<?php

declare (strict_types=1);
namespace Rector\DowngradePhp80\Reflection;

use PhpParser\BuilderHelpers;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;
use PHPStan\Reflection\FunctionReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\ParameterReflection;
use PHPStan\Reflection\ParametersAcceptor;
use PHPStan\Type\Constant\ConstantArrayType;
use PHPStan\Type\Constant\ConstantBooleanType;
use PHPStan\Type\ConstantType;
use PHPStan\Type\Type;
use Rector\Core\Exception\NotImplementedYetException;
use Rector\Core\Exception\ShouldNotHappenException;
final class DefaultParameterValueResolver
{
    /**
     * @return \PhpParser\Node\Expr|null
     */
    public function resolveFromParameterReflection(\PHPStan\Reflection\ParameterReflection $parameterReflection)
    {
        $defaultValue = $parameterReflection->getDefaultValue();
        if (!$defaultValue instanceof \PHPStan\Type\Type) {
            return null;
        }
        if (!$defaultValue instanceof \PHPStan\Type\ConstantType) {
            throw new \Rector\Core\Exception\ShouldNotHappenException();
        }
        return $this->resolveValueFromType($defaultValue);
    }
    /**
     * @param \PHPStan\Reflection\MethodReflection|\PHPStan\Reflection\FunctionReflection $functionLikeReflection
     */
    public function resolveFromFunctionLikeAndPosition($functionLikeReflection, int $position) : ?\PhpParser\Node\Expr
    {
        $parametersAcceptor = $functionLikeReflection->getVariants()[0] ?? null;
        if (!$parametersAcceptor instanceof \PHPStan\Reflection\ParametersAcceptor) {
            return null;
        }
        $parameterReflection = $parametersAcceptor->getParameters()[$position] ?? null;
        if (!$parameterReflection instanceof \PHPStan\Reflection\ParameterReflection) {
            return null;
        }
        return $this->resolveFromParameterReflection($parameterReflection);
    }
    /**
     * @return \PhpParser\Node\Expr\ConstFetch|\PhpParser\Node\Expr
     */
    private function resolveValueFromType(\PHPStan\Type\ConstantType $constantType)
    {
        if ($constantType instanceof \PHPStan\Type\Constant\ConstantBooleanType) {
            return $this->resolveConstantBooleanType($constantType);
        }
        if ($constantType instanceof \PHPStan\Type\Constant\ConstantArrayType) {
            $values = [];
            foreach ($constantType->getValueTypes() as $valueType) {
                if (!$valueType instanceof \PHPStan\Type\ConstantType) {
                    throw new \Rector\Core\Exception\ShouldNotHappenException();
                }
                $values[] = $this->resolveValueFromType($valueType);
            }
            return \PhpParser\BuilderHelpers::normalizeValue($values);
        }
        return \PhpParser\BuilderHelpers::normalizeValue($constantType->getValue());
    }
    private function resolveConstantBooleanType(\PHPStan\Type\Constant\ConstantBooleanType $constantBooleanType) : \PhpParser\Node\Expr\ConstFetch
    {
        if (!$constantBooleanType->getValue()) {
            $name = new \PhpParser\Node\Name('false');
        } elseif ($constantBooleanType->getValue()) {
            $name = new \PhpParser\Node\Name('true');
        } else {
            throw new \Rector\Core\Exception\NotImplementedYetException();
        }
        return new \PhpParser\Node\Expr\ConstFetch($name);
    }
}
