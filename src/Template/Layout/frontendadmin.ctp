<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $this->fetch('title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->Url->image('icon.png') ?>" />
    <?= $this->element('Admin/head') ?>
</head>
<body>
    <?= $this->element('Admin/header') ?>
    <!-- Page Content -->
    <div >
        <?= $this->Flash->render() ?>
        <div class="row">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- <?= $this->element('Admin/footer') ?> -->
</body>
</html>