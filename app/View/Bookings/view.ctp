<div class="bookings view">
<h2><?php echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['User']['name'], array('controller' => 'users', 'action' => 'view', $booking['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $booking['Booking']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($booking['hasuser'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['username']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['phone']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['updated']; ?>
&nbsp;</dd>
		<dt><?php echo __('Last Login'); ?></dt>
		<dd>
	<?php echo $booking['hasuser']['last_login']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Hasuser'), array('controller' => 'users', 'action' => 'edit', $booking['hasuser']['id'])); ?></li>
			</ul>
		</div>
	</div>
	