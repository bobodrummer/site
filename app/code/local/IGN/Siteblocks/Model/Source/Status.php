<?php
class IGN_Siteblocks_Model_Source_Status {
    const ENABLED = '1';
    const DISABLED = '0';

    public function toOptionArray()
    {
    return array(
        array('value' => self::ENABLED),
        array('value' => self::DISABLED),
    );
    }

    public function toArray()
    {
        return array(
            self::DISABLED,
            self::ENABLED,
        );
    }
}