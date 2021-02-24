<li ng-class="{
        active: Navigation.isSharedActive(),
        unread: Navigation.isSharedUnread()
    }"
    class="with-counter starred-feed">

    <a class="icon-shared" ng-href="#/items/shared/">
       <?php p($l->t('Shared with me')) ?>
    </a>

    <div class="app-navigation-entry-utils">
        <ul>
            <li class="app-navigation-entry-utils-counter"
                ng-show="Navigation.isSharedUnread()"
                title="{{ Navigation.getSharedCount() }}">
                {{ Navigation.getSharedCount() | unreadCountFormatter }}
            </li>
        </ul>
    </div>
</li>