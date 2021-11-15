<?php

final class
AGPageSettings {

    /* -- CBHTMLOutput interfaces -- */



    /**
     * @return string
     */
    static function
    CBHTMLOutput_replacementClassNameForPageSettings(
    ): string {
        return 'CB_StandardPageSettings';
    }
    /* CBHTMLOutput_replacementClassNameForPageSettings() */



    /**
     * @return void
     */
    static function CBInstall_install(): void {
        CBPageSettingsCatalog::install(__CLASS__);
    }



    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return ['CBPageSettingsCatalog'];
    }



    /**
     * @return [string]
     */
    static function
    CBPageSettings_htmlElementClassNames(
    ): array {
        return [
            'AGPageSettings',
            'CBLightTheme',
            'CBStyleSheet',
        ];
    }
    /* CBPageSettings_htmlElementClassNames() */



    /**
     * @return [string]
     */
    static function CBPageSettings_requiredClassNames(): array {
        return [
            'CBEqualizePageSettingsPart',
            'CBResponsiveViewportPageSettingsPart',
            'CBGoogleTagManagerPageSettingsPart',
            'CBFacebookPageSettingsPart',
        ];
    }
}
