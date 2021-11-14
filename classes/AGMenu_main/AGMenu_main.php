<?php

final class
AGMenu_main {

    /**
     * @return void
     */
    static function
    CBInstall_install(
    ): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'className' => 'CBMenu',
                'ID' => AGMenu_main::ID(),
                'title' => 'Antiques Gal',
                'titleURI' => '/',
            ]
        );

        CBModelUpdater::save($updater);

        CB_StandardPageFrame::setDefaultMainMenuModelCBID(
            AGMenu_main::ID()
        );
    }
    /* CBInstall_install() */



    /**
     * @return [string]
     */
    static function
    CBInstall_requiredClassNames(
    ): array {
        return [
            'CBMenu',
            'CBModelUpdater',
            'CB_StandardPageFrame',
        ];
    }
    /* CBInstall_requiredClassNames() */



    /**
     * @return ID
     */
    static function ID() {
        return 'fa0a9625d16acb42a5f6fc94ff40b7e48658936b';
    }

}
