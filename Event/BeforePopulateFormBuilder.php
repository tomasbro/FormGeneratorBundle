<?php
/**
 * Created by: Tomasz Brodzinski
 * Created at: 2015-05-29 16:03
 */
namespace Codete\FormGeneratorBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormBuilderInterface;

class BeforePopulateFormBuilder extends Event
{
    /**
     * @var FormBuilderInterface
     */
    private $fb;

    /**
     * @var object
     */
    private $model;

    /**
     * @var string
     */
    private $form;

    /**
     * @var array
     */
    private $context;

    /**
     * @param FormBuilderInterface $fb
     * @param object $model data object
     * @param string $form view to generate
     * @param array $context
     */
    public function __construct(FormBuilderInterface $fb, $model, $form, array $context)
    {
        $this->fb = $fb;
        $this->model = $model;
        $this->form = $form;
        $this->context = $context;
    }

    /**
     * Gets $fb.
     *
     * @return FormBuilderInterface
     */
    public function getFb()
    {
        return $this->fb;
    }

    /**
     * Sets $fb.
     *
     * @param FormBuilderInterface $fb
     */
    public function setFb($fb)
    {
        $this->fb = $fb;
    }

    /**
     * Gets $context.
     *
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets $context.
     *
     * @param array $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Gets $model.
     *
     * @return object
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets $model.
     *
     * @param object $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Gets $form.
     *
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets $form.
     *
     * @param string $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

}
