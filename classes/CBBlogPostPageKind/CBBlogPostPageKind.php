<?php

/**
 * @NOTE 2018.08.02
 *
 *      This class is named CBBlogPostPageKind because it was using the default
 *      blog post page kind before page kinds were installed by websites.
 */
final class CBBlogPostPageKind {

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        CBPageKindCatalog::install(__CLASS__);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return ['CBPageKindCatalog'];
    }
}
