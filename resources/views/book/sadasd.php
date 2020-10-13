 
 
 
C:\xampp\htdocs\advertising\Controller\ItemsController.php
 
<?php
 
class ItemsController extends AppController {
 
 
            public function sort() {
 
                 $this->layout = 'ajax';
$this->render(false);
                            $menu = $_POST['menu'];
                        for ($i = 0; $i < count($menu); $i++) {
                           
                        // mysql_query("UPDATE `menu` SET `sort`=" . $i . " WHERE `id`='" . $menu[$i] . "'") or die(mysql_error());
                       
                           
                                                    $this->Item->read(null, $menu[$i]);
                                                    $this->Item->set('order', $i);
                                                    $this->Item->save();
                                                  
                                                    
                            /*
                                                    $this->Item->query("UPDATE `items` SET order =  {$i} WHERE id =  $menu[$i] ");
                                                    $this->Item->save();
                                                    */
 
                       
                        }
 
 
 
                        }
                       
                       
                       
}
 
?>
 
 
 
 
C:\xampp\htdocs\advertising\View\Items\index.ctp
 
 
<div class="items index">
 
    <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                        <h1><?php echo __('Items'); ?></h1>
                </div>
            </div><!-- end col md 12 -->
    </div><!-- end row -->
 
 
 
    <div class="row">
 
            <div class="col-md-3">
                <div class="actions">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Item'), array('action' => 'add'), array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Menus'), array('controller' => 'menus', 'action' => 'index'), array('escape' => false)); ?> </li>
                                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Menu'), array('controller' => 'menus', 'action' => 'add'), array('escape' => false)); ?> </li>
                                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pages'), array('controller' => 'pages', 'action' => 'index'), array('escape' => false)); ?> </li>
                                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Page'), array('controller' => 'pages', 'action' => 'add'), array('escape' => false)); ?> </li>
                                    </ul>
                            </div><!-- end body -->
                        </div><!-- end panel -->
                </div><!-- end actions -->
            </div><!-- end col md 3 -->
 
            <div class="col-md-9"   id="sortme" >
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <thead>
                            <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                                    <th><?php echo $this->Paginator->sort('order'); ?></th>
                                    <th><?php echo $this->Paginator->sort('menu_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('page_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('url'); ?></th>
                                    <th><?php echo $this->Paginator->sort('icon'); ?></th>
                                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th class="actions"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr  class="box"   id="menu_<?php echo $item['Item']['id'] ?>">
                                    <td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
                                    <td><?php echo h($item['Item']['title']); ?>&nbsp;</td>
                                    <td><?php echo h($item['Item']['order']); ?>&nbsp;</td>
                                    <td>
                                                <?php echo $this->Html->link($item['Menu']['title'], array('controller' => 'menus', 'action' => 'view', $item['Menu']['id'])); ?>
                                    </td>
                                    <td>
                                                <?php echo $this->Html->link($item['Page']['title'], array('controller' => 'pages', 'action' => 'view', $item['Page']['id'])); ?>
                                    </td>
                                    <td><?php echo h($item['Item']['url']); ?>&nbsp;</td>
                                    <td><?php echo h($item['Item']['icon']); ?>&nbsp;</td>
                                    <td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
                                    <td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
                                    <td class="actions">
                                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $item['Item']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $item['Item']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $item['Item']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
                                    </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                </table>
 
                <p>
                        <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
                </p>
 
                <?php
                $params = $this->Paginator->params();
                if ($params['pageCount'] > 1) {
                        ?>
                <ul class="pagination pagination-sm">
                            <?php
                            echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                            echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                            ?>
                </ul>
                <?php } ?>
 
            </div> <!-- end col md 9 -->
    </div><!-- end row -->
 
 
</div><!-- end containing of content -->
 
 
 
 
 
 
 
 
 
 
C:\xampp\htdocs\advertising\View\Layouts\default.ctp
 
<?php
/**
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
*/
 
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
 
      
?>
 
 
<!DOCTYPE html>
<html>
<head>
            <?php echo $this->Html->charset(); ?>
            <title>
                        <?php echo $cakeDescription ?>:
                        <?php echo $this->fetch('title'); ?>
            </title>
            <?php
                        echo $this->Html->meta('icon');
 
                        echo $this->Html->css('cake.generic');
                       
 
                        echo $this->fetch('meta');
                        echo $this->fetch('css');
                        echo $this->fetch('script');
            ?>
   
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<script>
$(document).ready(
function() {
$("#sortme").sortable({
  connectWith: ".box",
items: ".box",
opacity: 0.5,
forcePlaceholderSize: true,
tolerance: "pointer" ,
 
update : function () {
serial = $('#sortme').sortable('serialize');
console.log(serial);
$.ajax({
url: "<?= ROOT_URL ?>items/sort",
type: "post",
data: serial,
           
success: function() {
    // alert("success");
},
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>
   
    
</head>
<body>
            <div id="container">
                        <div id="header">
                                    <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
                        </div>
                        <div id="content">
 
                                    <?php echo $this->Session->flash(); ?>
 
                                    <?php echo $this->fetch('content'); ?>
                        </div>
                        <div id="footer">
                                    <?php echo $this->Html->link(
                                                            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                                                            'http://www.cakephp.org/',
                                                            array('target' => '_blank', 'escape' => false)
                                                );
                                    ?>
                        </div>
            </div>
            <?php echo $this->element('sql_dump'); ?>
</body>
</html>
 
 
 
 