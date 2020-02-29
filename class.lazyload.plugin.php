<?php

use Vanilla\Formatting\FormatUtil;

class LazyloadPlugin extends Gdn_Plugin {

    // Dynamically add loading="lazy" to all user content images.
    public function discussionController_afterCommentFormat_handler($sender, $args) {
        $sender->EventArguments['Object']->FormatBody = FormatUtil::replaceButProtectCodeBlocks(
            '/<img /',
            '<img loading="lazy" ',
            $args['Object']->FormatBody
        );
    }

}
