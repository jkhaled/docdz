<?php
/**
 * User: khaled
 * Date: 11/23/15 at 12:01 PM
 */

namespace Patient\Form;


use Zend\Form\Form;

class ConsultationForm extends Form
{

    public function __construct($name = null)
    {
        parent::__construct('consultation');

        $this->add([
            'name'=>'title',
            'required'=>true,
            'attributes'=> [
                'required'=>'required',
                'type'=>'text',
            ],
        ]);

        $this->add([
            'name'=>'description',
            'required'=>true,
            'attributes'=> [
                'required'=>'required',
                'type'=>'textarea',
            ],
        ]);
    }

}