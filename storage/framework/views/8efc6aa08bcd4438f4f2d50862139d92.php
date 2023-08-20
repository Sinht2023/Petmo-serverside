<h1>Pet Azuke Place Details</h1>
    
    <div class="place-details">
        <h2><?php echo e($place->place_name); ?></h2>
        <p><?php echo e($place->description); ?></p>
        
        <!-- Chat Button -->
        <a href="<?php echo e(route('api.chat.fetch', ['sender_user_id' => $place->user_id, 'place_id' => $place->id])); ?>" class="btn btn-primary">Chat</a>
    </div><?php /**PATH /Users/phyuphyucho/Petmo-serverside/resources/views/petAzukedetail.blade.php ENDPATH**/ ?>