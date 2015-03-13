<?php
class bootstrap3crudCrudController extends bootstrap3crudCrudController_Parent
{

    public function alter_values_index($request, $params = null)
    {
        $ret = parent::alter_values_index($request, $params);
        $this->addClasses('more_classes_table', array(
            'table',
            'table-striped',
            'table-hover',
            'table-responsive',
        ));
        $this->addClasses('more_classes_createbutton', array(
            'btn',
            'btn-primary',
            'btn-lg',
            'pull-right',
        ));
        return $ret;
    }

    public function alter_values_create_or_update($request, $params = null)
    {
        $ret = parent::alter_values_create_or_update($request, $params);
        $this->addClasses('more_classes_backbutton', array(
            'btn',
            'btn-lg',
            'btn-default',
            'btn-raised',
            'btn-white',
            'pull-left',
        ));
        $this->addClasses('more_classes_savebutton', array(
            'btn',
            'btn-lg',
            'btn-primary',
            'btn-raised',
            'pull-right',
        ));
        $this->addClasses('more_classes_delbutton', array(
            'btn',
            'btn-lg',
            'btn-danger',
            'btn-raised',
            'pull-right',
        ));
        $this->addClasses('more_classes_field_wrap', array(
            'form-group',
        ));
        $this->addClasses('more_classes_field_val', array(
            'form-control',
        ));
        $this->addClasses('more_classes_field_comment', array(
            'help-block',
        ));

        //exemple : pour mettre le formulaire en horizontal, il suffit de créer une surcharge pour rajouter les classes suivantes
        //$this->addClasses('more_classes_form', array(
            //'form-horizontal',
        //));
        //$this->addClasses('more_classes_field_key', array(
            //'col-sm-4',
        //));
        //$this->addClasses('more_classes_field_val_div', array(
            //'col-sm-8',
        //));

        return $ret;
    }

    public function alter_values_read($request, $params = null)
    {
        $ret = parent::alter_values_read($request, $params);
        $this->addClasses('more_classes_field_wrap', array(
            'form-group',
        ));
        $this->addClasses('more_classes_img', array(
            'img-responsive',
        ));
        return $ret;
    }


}
