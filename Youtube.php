<?php

class Youtube implements InterfaceVideo
{
    private string $name;
    private string $source;
    private string $htmlCode;

    /**
     * @param string $name
     * @param string $source
     * @param string $htmlCode
     */
    public function __construct(string $name, string $source, string $htmlCode)
    {
        $this->name = $name;
        $this->source = $source;
        $this->htmlCode = $htmlCode;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getHtmlCode()
    {
        return $this->htmlCode;
    }
}