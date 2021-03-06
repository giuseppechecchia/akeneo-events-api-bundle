<?php

declare(strict_types=1);

namespace Frmoda\Bundle\EventsApiBundle\Model;

use Akeneo\Pim\Enrichment\Component\Category\Model\CategoryInterface;
use Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface;
use Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface;
use Akeneo\Pim\Structure\Component\Model\AttributeInterface;
use Akeneo\Pim\Structure\Component\Model\FamilyInterface;
use Frmoda\Bundle\EventsApiBundle\EventType\EventTypeConfiguration;
use Frmoda\Bundle\EventsApiBundle\EventType\EventTypeConfigurationInterface;

class PimEventTypeConfigurationFactories
{
    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function categoryCreatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::CATEGORY_CREATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof CategoryInterface && $event instanceof GenericCreateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function categoryUpdatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::CATEGORY_UPDATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof CategoryInterface && $event instanceof GenericUpdateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateRemoveEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function categoryRemovedEventTypeConfiguration(CreateRemoveEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::CATEGORY_REMOVED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof CategoryInterface && $event instanceof GenericRemoveEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function attributeCreatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::ATTRIBUTE_CREATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof AttributeInterface && $event instanceof GenericCreateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function attributeUpdatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::ATTRIBUTE_UPDATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof AttributeInterface && $event instanceof GenericUpdateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateRemoveEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function attributeRemovedEventTypeConfiguration(CreateRemoveEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::ATTRIBUTE_REMOVED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof AttributeInterface && $event instanceof GenericRemoveEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function familyCreatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::FAMILY_CREATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof FamilyInterface && $event instanceof GenericCreateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function familyUpdatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::FAMILY_UPDATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof FamilyInterface && $event instanceof GenericUpdateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateRemoveEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function familyRemovedEventTypeConfiguration(CreateRemoveEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::FAMILY_REMOVED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof FamilyInterface && $event instanceof GenericRemoveEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productCreatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_CREATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductInterface && $event instanceof GenericCreateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productUpdatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_UPDATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductInterface && $event instanceof GenericUpdateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateRemoveProductEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productRemovedEventTypeConfiguration(CreateRemoveProductEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_REMOVED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductInterface && $event instanceof GenericRemoveEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productModelCreatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_MODEL_CREATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductModelInterface && $event instanceof GenericCreateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productModelUpdatedEventTypeConfiguration(CreateEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_MODEL_UPDATED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductModelInterface && $event instanceof GenericUpdateEntityEventInterface;
            },
            $createEventTypePayload
        );
    }

    /**
     * @param CreateRemoveEventTypePayload $createEventTypePayload
     * @return EventTypeConfigurationInterface
     */
    public static function productModelRemovedEventTypeConfiguration(CreateRemoveEventTypePayload $createEventTypePayload): EventTypeConfigurationInterface
    {
        return new EventTypeConfiguration(
            EntityEventTypes::PRODUCT_MODEL_REMOVED,
            static function (GenericEventInterface $event) {
                return $event->getSubject() instanceof ProductModelInterface && $event instanceof GenericRemoveEntityEventInterface;
            },
            $createEventTypePayload
        );
    }
}
