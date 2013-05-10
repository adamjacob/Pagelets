##Pagelets

Dropplets Plugin that enables custom pages.

###What it does

Want to setup a custom page like `dropplets-blog.com/about`. This plugin is just what your looking for. Pagelets lets your drop `html` or `md` files into a folder an the plugin does the rest.

###Setup

- Copy `Pagelets.php` into /dropplets/plugins/
- Copy `template/Page.php` into your current dropplets template directory.
- Create a directory named `pages` at the root level of your dropplets install.

### Usage
- Copy either a `html` or `md` file into the `pages` directory you created.
- In your browser navigate to `yoursite.com/that-file-name`
- BAM!

### Templating
Create a `page.php` file in your template directory. `$contents` variable will contain the page contents.
```php
<?php include_once 'header.php'; ?>

    <?php echo $content ?>

<?php include_once 'footer.php'; ?>

```