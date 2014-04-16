<?php
namespace SampleForm\Entity;

class Document {
    protected $id = null;
    protected $createdDate = null;
    protected $uploadedDate = null;
    protected $title = null; // Name associated for friendly display
    protected $fileName = null; // Original file name uploaded.
    protected $fileSize = 0;

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function set_id($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function get_id() { // Used as a dummy method for the Mongo Mapper
        return $this->id;
    }

    /**
     * @param null $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param null $uploadedDate
     */
    public function setUploadedDate($uploadedDate)
    {
        $this->uploadedDate = $uploadedDate;
    }

    /**
     * @return null
     */
    public function getUploadedDate()
    {
        return $this->uploadedDate;
    }

    /**
     * @param null $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }


}