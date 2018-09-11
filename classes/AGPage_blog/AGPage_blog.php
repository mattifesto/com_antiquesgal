<?php

final class AGPage_blog {

    /**
     * @return void
     */
    static function CBInstall_configure(): void {
        AGPage_blog::installPage();
        AGPage_blog::installMenuItem();
    }

    /**
     * @return ID
     */
    static function ID(): string {
        return '9e1ec21307901fa4d7d7ab8f01da0594013ad431';
    }

    /**
     * @return void
     */
    private static function installMenuItem(): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'ID' => AGMenu_main::ID(),
            ]
        );

        $menuSpec = $updater->working;

        CBMenu::addOrReplaceItem(
            $menuSpec,
            (object)[
                'className' => 'CBMenuItem',
                'name' => 'blog',
                'text' => 'Blog',
                'URL' => '/blog/',
            ]
        );

        CBModelUpdater::save($updater);
    }

    /**
     * @return void
     */
    private static function installPage(): void {
        $updater = CBModelUpdater::fetch(
            CBModelTemplateCatalog::fetchLivePageTemplate(
                (object)[
                    'ID' => AGPage_blog::ID(),
                    'classNameForKind' => 'AGGeneratedPageKind',
                    'isPublished' => true,
                    'selectedMenuItemNames' => 'blog',
                    'title' => 'Blog',
                    'URI' => 'blog',
                ]
            )
        );

        $pageSpec = $updater->working;

        /* publicationTimeStamp */

        if (CBModel::valueAsInt($pageSpec, 'publicationTimeStamp') === null) {
            $pageSpec->publicationTimeStamp = time();
        }

        /* page title and description view */

        $sourceID = '27c4af97695dccdb7c67c487e037eb73250aef37';

        /**
         * @NOTE 2018_09_10
         *
         * After this code has run once on each site, switch the search to
         * search on sourceID instead of className.
         */

        CBSubviewUpdater::unshift(
            $pageSpec,
            'className',
            'CBPageTitleAndDescriptionView',
            (object)[
                'className' => 'CBPageTitleAndDescriptionView',
                'sourceID' => $sourceID,
            ]
        );

        /* page list view */

        $sourceID = '38870e83c5e46bffef95a3e12d79eea717a86acb';

        /**
         * @NOTE 2018_09_10
         *
         * After this code has run once on each site, switch the search to
         * search on sourceID instead of className.
         */

        CBSubviewUpdater::push(
            $pageSpec,
            'className',
            'CBPageListView2',
            (object)[
                'className' => 'CBPageListView2',
                'classNameForKind' => 'CBBlogPostPageKind',
                'sourceID' => $sourceID,
            ]
        );

        /* save */

        CBModelUpdater::save($updater);
    }
}
