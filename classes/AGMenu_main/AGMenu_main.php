<?php

final class AGMenu_main {

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'className' => 'CBMenu',
                'ID' => AGMenu_main::ID(),
                'title' => 'Antiques Gal',
                'titleURI' => '/',
            ]
        );

        CBModelUpdater::save($updater);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return [
            'CBMenu',
            'CBModelUpdater',
        ];
    }

    /**
     * @return ID
     */
    static function ID() {
        return 'fa0a9625d16acb42a5f6fc94ff40b7e48658936b';
    }
}
