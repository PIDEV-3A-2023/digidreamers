<?php

namespace ContainerQHpifF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\ActivateAccountType' => ['privates', 'App\\Form\\ActivateAccountType', 'getActivateAccountTypeService', true],
            'App\\Form\\Annonces1Type' => ['privates', 'App\\Form\\Annonces1Type', 'getAnnonces1TypeService', true],
            'App\\Form\\AnnoncesType' => ['privates', 'App\\Form\\AnnoncesType', 'getAnnoncesTypeService', true],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', true],
            'App\\Form\\ColisType' => ['privates', 'App\\Form\\ColisType', 'getColisTypeService', true],
            'App\\Form\\CompetitionType' => ['privates', 'App\\Form\\CompetitionType', 'getCompetitionTypeService', true],
            'App\\Form\\DocumentexpeditionType' => ['privates', 'App\\Form\\DocumentexpeditionType', 'getDocumentexpeditionTypeService', true],
            'App\\Form\\FrontReservationType' => ['privates', 'App\\Form\\FrontReservationType', 'getFrontReservationTypeService', true],
            'App\\Form\\GiftsType' => ['privates', 'App\\Form\\GiftsType', 'getGiftsTypeService', true],
            'App\\Form\\MessageType' => ['privates', 'App\\Form\\MessageType', 'getMessageTypeService', true],
            'App\\Form\\QuizQuestionType' => ['privates', 'App\\Form\\QuizQuestionType', 'getQuizQuestionTypeService', true],
            'App\\Form\\ReclamationsType' => ['privates', 'App\\Form\\ReclamationsType', 'getReclamationsTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\ReservationType' => ['privates', 'App\\Form\\ReservationType', 'getReservationTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'App\\Form\\SearchForm' => ['privates', 'App\\Form\\SearchForm', 'getSearchFormService', true],
            'App\\Form\\User1Type' => ['privates', 'App\\Form\\User1Type', 'getUser1TypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'App\\Form\\ValidationType' => ['privates', 'App\\Form\\ValidationType', 'getValidationTypeService', true],
            'App\\Form\\VehiculeType' => ['privates', 'App\\Form\\VehiculeType', 'getVehiculeTypeService', true],
            'Gregwar\\CaptchaBundle\\Type\\CaptchaType' => ['services', 'gregwar_captcha.type', 'getGregwarCaptcha_TypeService', true],
            'Karser\\Recaptcha3Bundle\\Form\\Recaptcha3Type' => ['privates', 'karser_recaptcha3.form.type', 'getKarserRecaptcha3_Form_TypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\ActivateAccountType' => '?',
            'App\\Form\\Annonces1Type' => '?',
            'App\\Form\\AnnoncesType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\ColisType' => '?',
            'App\\Form\\CompetitionType' => '?',
            'App\\Form\\DocumentexpeditionType' => '?',
            'App\\Form\\FrontReservationType' => '?',
            'App\\Form\\GiftsType' => '?',
            'App\\Form\\MessageType' => '?',
            'App\\Form\\QuizQuestionType' => '?',
            'App\\Form\\ReclamationsType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ReservationType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\SearchForm' => '?',
            'App\\Form\\User1Type' => '?',
            'App\\Form\\UserType' => '?',
            'App\\Form\\ValidationType' => '?',
            'App\\Form\\VehiculeType' => '?',
            'Gregwar\\CaptchaBundle\\Type\\CaptchaType' => '?',
            'Karser\\Recaptcha3Bundle\\Form\\Recaptcha3Type' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
