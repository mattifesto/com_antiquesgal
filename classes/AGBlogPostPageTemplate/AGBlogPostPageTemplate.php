<?php

final class AGBlogPostPageTemplate {

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        CBModelTemplateCatalog::install(__CLASS__);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return ['CBModelTemplateCatalog'];
    }

    /**
     * @return model
     */
    static function CBModelTemplate_spec(): stdClass {
        return (object)[
            'className' => 'CBViewPage',
            'classNameForKind' => 'CBBlogPostPageKind',
            'classNameForSettings' => 'AGPageSettings',
            'frameClassName' => 'AGPageFrame',
            'selectedMainMenuItemName' => 'blog',
            'sections' => [
                (object)[
                    'className' => 'CBPageTitleAndDescriptionView',
                    'showPublicationDate' => true,
                ],
                (object)[
                    'className' => 'CBArtworkView',
                ],
                (object)[
                    'className' => 'CBMessageView',
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    static function CBModelTemplate_title(): string {
        return 'Blog Post';
    }
}
