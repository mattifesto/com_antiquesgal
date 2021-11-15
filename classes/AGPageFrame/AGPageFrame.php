<?php

final class
AGPageFrame {

    /**
     * @return [string]
     */
    static function CBHTMLOutput_CSSURLs(): array {
        return [Colby::flexpath(__CLASS__, 'css', cbsiteurl())];
    }

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        CBPageFrameCatalog::install(__CLASS__);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return ['CBPageFrameCatalog'];
    }



    /* -- CBPageFrame interfaces -- */



    /**
     * @param function $renderContent
     *
     * @return void
     */
    static function
    CBPageFrame_render(
        callable $renderContent
    ): void {
        $selectedMenuItemNames = CBHTMLOutput::getSelectedMenuItemNamesArray();

        $selectedMainMenuItemName = (
            count($selectedMenuItemNames) > 0 ?
            $selectedMenuItemNames[0] :
            ''
        );

        ?>

        <header class="AGPageFrame_header CBDarkTheme">
            <?php

            CBView::render(
                (object)[
                    'className' => 'CBMenuView',
                    'menuID' => AGMenu_main::ID(),
                    'selectedItemName' => $selectedMainMenuItemName,
                ]
            );

            ?>
        </header>

        <?php

        $renderContent();

        ?>

        <footer class="AGPageFrame_footer CBDarkTheme">
            <div class="copyright">
                <span>
                    Copyright &copy; <?=
                        gmdate('Y') .
                        ' ' .
                        cbhtml(
                            CBSitePreferences::siteName()
                        )
                    ?>
                </span>
            </div>
        </footer>

        <?php
    }
    /* CBPageFrame_render() */



    /**
     * @return string
     */
    static function
    CBPageFrame_replacementPageFrameClassName(
    ): string {
        return 'CB_StandardPageFrame';
    }
    /* CBPageFrame_replacementPageFrameClassName() */

}
