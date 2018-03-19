<?php

namespace PHPDish\DailySongPlugin\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SongAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('name', null);
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('name', null, ['label' => '标题'])
            ->add('src', null, ['label' => 'URL'])
            ->add('srcId', null, ['label' => '歌曲ID'])
            ->add('enabled', null, ['editable' => true, 'label' => '状态']);
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('name', null, ['label' => '标题'])
            ->add('src', null, ['label' => 'URL'])
            ->add('srcId', null, ['label' => '歌曲ID'])
            ->add('enabled', null, ['label' => '状态']);
    }
}