<?php

namespace PhpSchool\CliMenu\MenuItem;

/**
 * @author Michael Woodward <mikeymike.mw@gmail.com>
 */
class SelectableItem implements MenuItemInterface
{
    use SelectableTrait;

    /**
     * @var callable
     */
    private $selectAction;

    public function __construct(
        string $text,
        callable $selectAction,
        string $extraText = null,
        bool $disabled = false
    ) {
        $this->text          = $text;
        $this->selectAction  = $selectAction;
        $this->extraText     = $extraText;
        $this->disabled      = $disabled;
    }

    /**
     * Execute the items callable if required
     */
    public function getSelectAction() : ?callable
    {
        return $this->selectAction;
    }

    /**
     * Return the raw string of text
     */
    public function getText() : string
    {
        return $this->text;
    }

    /**
     * Set the raw string of text
     */
    public function setText(string $text) : void
    {
        $this->text = $text;
    }
}
