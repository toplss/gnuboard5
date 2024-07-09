<?php
namespace Template;

/**
 * 템플레이트 레이아웃 페이지에 배열변수 전달용
 */
class TemplatArr
{
    static $arr = array();

    public function setterArr(array $data)
    {
        $this->arr = $data;
    }

    public function getterArr()
    {
        return $this->arr;
    }
}