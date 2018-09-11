<?php

final class AGPageFrame {

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

    /**
     * @param function $renderContent
     *
     * @return void
     */
    static function CBPageFrame_render(callable $renderContent): void {
        $selectedMainMenuItemName = CBModel::value(CBHTMLOutput::pageInformation(), 'selectedMainMenuItemName');

        ?>

        <header class="AGPageFrame_header CBDarkTheme">
            <?php

            CBView::render((object)[
                'className' => 'CBMenuView',
                'menuID' => AGMenu_main::ID(),
                'selectedItemName' => $selectedMainMenuItemName,
            ]);

            ?>
        </header>

        <?php

        $renderContent();

        ?>

        <footer class="AGPageFrame_footer CBDarkTheme">
            <div class="copyright">
                <span>
                    Copyright &copy; <?= gmdate('Y') . ' ' . cbhtml(CBSitePreferences::siteName()) ?>
                </span>
            </div>
        </footer>

        <?php
    }
}
