
    <h1>Pet Azuke Places</h1>
    
    <div class="pet-azuke-places">
        <ul>
            <?php $__currentLoopData = $petAzukePlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h2><a href="<?php echo e(route('getPetAzukePlace', ['place_id' => $place->id])); ?>"><?php echo e($place->place_name); ?></a></h2>
                    <p><?php echo e($place->description); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php /**PATH /Users/phyuphyucho/Petmo-serverside/resources/views/petAzukePlaces.blade.php ENDPATH**/ ?>