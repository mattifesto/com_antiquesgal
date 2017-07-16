<?php

final class CBPageHelpers {

    /**
     * @return [string]
     */
    static function classNamesForPageKinds() {
        return array_merge(
            CBPagesPreferences::classNamesForPageKindsDefault(),
            ['CBBlogPostPageKind']
        );
    }

    /**
     * @return [string]
     */
    static function classNamesForPageTemplates() {
        return ['CBBlogPostPageTemplate', 'CBStandardPageTemplate'];
    }
}
