<?php

$userSettings = array(
    'Username' => $_GET['usernames'] ?? '',
    'Email' => $_GET['email'] ?? '',
    'Notification' => 'On', 
    'Language' => 'English',
    'Timezone' => 'UTC',
    'Theme' => 'Dark',
    'ReceiveEmails' => 'Yes',
    'PreferredCurrency' => 'RWF',

);

$languages = array('English', 'Spanish', 'French', 'German');
$themes = array('Light', 'Dark', 'Blue', 'Green');
$notifications = array('On', 'OFF');
?>

<div class="profile-section">
    <h3>Settings</h3>
    <form action="process_settings.php" method="post">
        <table class="user-settings-table">
            
            <tr>
                <td class="label">Notification:</td>
                <td><?= $userSettings['Notification']; ?></td>
            </tr>
            <tr>
                <td class="label">Language:</td>
                <td>
                    <select name="language">
                        <?php foreach ($languages as $language) : ?>
                            <option value="<?= $language ?>" <?= ($userSettings['Language'] == $language) ? 'selected' : '' ?>>
                                <?= $language ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">Timezone:</td>
                <td><?= $userSettings['Timezone']; ?></td>
            </tr>
            <tr>
                <td class="label">Theme:</td>
                <td>
                    <select name="theme">
                        <?php foreach ($themes as $theme) : ?>
                            <option value="<?= $theme ?>" <?= ($userSettings['Theme'] == $theme) ? 'selected' : '' ?>>
                                <?= $theme ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">Receive Emails:</td>
                <td><?= $userSettings['ReceiveEmails']; ?></td>
            </tr>
            <tr>
                <td class="label">Preferred Currency:</td>
                <td><?= $userSettings['PreferredCurrency']; ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Save Changes">
                </td>
            </tr>
        </table>
    </form>
</div>
