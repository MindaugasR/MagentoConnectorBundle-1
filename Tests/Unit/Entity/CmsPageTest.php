<?php

namespace ONGR\MagentoConnectorBundle\Tests\Unit\Entity;

use ONGR\ConnectionsBundle\Tests\Unit\Entity\AbstractEntityTest;

class CmsPageTest extends AbstractEntityTest
{
    /**
     * {@inheritdoc}
     */
    public function getFieldsData()
    {
        return [
            ['id'],
            ['creationTime'],
            ['updateTime'],
            ['title'],
            ['slug'],
            ['content'],
            ['heading'],
            [
                'stores',
                'ONGR\MagentoConnectorBundle\Entity\CmsPage',
                'addStore',
                'removeStore',
            ],
            ['isActive'],
            ['metaDescription'],
            ['metaKeywords'],
            ['sortOrder'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return 'ONGR\MagentoConnectorBundle\Entity\CmsPage';
    }
}
