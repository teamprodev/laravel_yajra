<?php

namespace App\View\Components;

use App\Text\text;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use ReflectionClass;

class laravelYajra extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $tableTitle;
    public string $getData;
    public string $language;
    public string $dom;
    public int $pageLength;
    public string $buttonLanguage;
    public string|bool $colReorder;
    public string|bool $responsive;
    public string|bool $select;
    public string|int $scrollY;
    public string|bool $scroller;
    public string|bool $keys;
    public string|bool $rowReorder;
    public string|bool $rowGroup;
    public string $pagingType;

    public function __construct(string      $tableTitle = null,
                                string      $getData = null,
                                string        $language = 'en-GB',
                                bool        $buttonLanguage = null,
                                string      $dom = 'Qlfrtip',
                                string|bool $select = 'false',
                                string $responsive = 'false',
                                string|bool $colReorder = 'false',
                                int         $pageLength = 10,
                                string|int $scrollY = null,
                                string|bool $scroller = 'false',
                                string|bool $keys = 'false',
                                string|bool $rowReorder = 'false',
                                string|bool $rowGroup = 'false',
                                string $pagingType = 'simple_numbers',
    )
    {
        $text = new text();
        $this->tableTitle = $tableTitle;
        $this->getData = $getData;
        $this->language = isset($language) ? $text->language($language) : $language;
        $this->dom = $dom;
        $this->pageLength = $pageLength;
        $this->buttonLanguage = isset($buttonLanguage) ? $text->language_button($tableTitle) : $buttonLanguage;
        $this->colReorder = $colReorder;
        $this->responsive = $responsive;
        $this->select = $select;
        $this->scrollY = isset($scrollY) ? "scrollY:  $scrollY," : "";
        $this->scroller = $scroller;
        $this->keys = $keys;
        $this->rowReorder = $rowReorder;
        $this->rowGroup = $rowGroup;
        $this->pagingType = $pagingType;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laravelYajra');
    }
}
