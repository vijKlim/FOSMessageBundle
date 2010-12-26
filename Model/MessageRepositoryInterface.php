<?php

namespace Bundle\Ornicar\MessageBundle\Model;

use Bundle\FOS\UserBundle\Model\User;

interface MessageRepositoryInterface
{
    function findRecentByUser(User $user, $asPaginator = false);

    function countUnreadByUser(User $user);
}
