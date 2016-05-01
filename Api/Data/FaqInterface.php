<?php
namespace Arkade\Faq\Api\Data;

interface FaqInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const FAQ_ID         = 'faq_id';
    const FAQ_IDENTIFIER = 'faq_identifier';
    const TITLE          = 'title';
    const CONTENT        = 'content';
    const SORT_ORDER     = 'sort_order';
    const CREATION_TIME  = 'creation_time';
    const UPDATE_TIME    = 'update_time';
    const IS_ACTIVE      = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();


    /**
     * Get Identifier
     *
     * @return string|null
     */
    public function getFaqIdentifier();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get sort order
     *
     * @return int|null
     */
    public function getSortOrder();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setId($id);

    /**
     * Set Identifier
     *
     * @param string $faq_identifier
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setFaqIdentifier($faq_identifier);

    /**
     * Set title
     *
     * @param string $title
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setContent($content);

    /**
     * Set sort order
     * @param int $sortOrder
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */

    public function setSortOrder($sortOrder);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Arkade\Faq\Api\Data\FaqInterface
     */
    public function setIsActive($isActive);
}
