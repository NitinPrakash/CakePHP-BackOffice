        
        <h3> <i class="fa fa-angle-right"></i> Users</h3>  
        <div class="col-md-12">
        <div class="content-panel">
                <h4> <i class="fa fa-angle-right"></i> <?php echo __('User List'); ?></h4>
                <table class="table" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('username'); ?></th>
                                <th><?php echo $this->Paginator->sort('name'); ?></th>
                                <th><?php echo $this->Paginator->sort('email'); ?></th>
                                <th><?php echo $this->Paginator->sort('phone'); ?></th>                                
                                <th><?php echo $this->Paginator->sort('created'); ?></th>
                                <th><?php echo $this->Paginator->sort('updated'); ?></th>
                                <th><?php echo $this->Paginator->sort('last_login'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                        <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>                        
                        <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['last_login']); ?>&nbsp;</td>
                        <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-sm btn-info')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn btn-sm btn-primary')); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']),array('class'=>'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
                        </td>
                </tr>
        <?php endforeach; ?>
                </tbody>
                </table>
                <div class="text-right">                    
                    <div>
                          <ul class="paging pagination">
                          <?php
                                  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                                  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
                                  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                          ?>
                          </ul>  
                    </div>
                
                </div>                
        </div>
        <div class="actions">
                <h3><?php echo __('Actions'); ?></h3>
                <ul>
                        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
                </ul>
        </div>
    </div>  
       
