<?php

declare(strict_types=1);

namespace Casbin\Persist;

/**
 * Interface Watcher
 * the interface for Casbin watchers.
 *
 * @author techlee@qq.com
 */
interface Watcher
{
    /**
     * sets the callback function that the watcher will call when the policy in DB has been changed by other instances.
     * A classic callback is Enforcer.LoadPolicy().
     *
     * @param \Closure $func
     */
    public function setUpdateCallback(\Closure $func): void;

    /**
     * Update calls the update callback of other instances to synchronize their policy.
     * It is usually called after changing the policy in DB, like Enforcer.SavePolicy(),
     * Enforcer.AddPolicy(), Enforcer.RemovePolicy(), etc.
     */
    public function update(): void;
}
