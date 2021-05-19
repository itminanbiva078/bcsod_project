<?php $__env->startSection("title", $categoryInfo->title); ?>
<?php $__env->startSection('content'); ?>
    <div class="tab-content bg_gray" id="nav-tabContent">
        <div class="tab-pane fade show active"
             id="business_consulting"
             role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <div class="accordion" id="links_accorodion">
                                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pKey=> $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php
                                    $show = '';
                                    if ($pKey == 0) {
                                        $show = 'show';
                                    }
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="heading_business_plan_<?php echo e($pKey); ?>">
                                            <h2 class="mb-0 text-center">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#business_plan_<?php echo e($pKey); ?>" aria-expanded="true"
                                                        aria-controls="business_plan_<?php echo e($pKey); ?>">
                                                    <?php echo e($product->title); ?>

                                                </button>
                                            </h2>
                                        </div>

                                        <div id="business_plan_<?php echo e($pKey); ?>" class="collapse <?php echo e($show); ?>"
                                             aria-labelledby="heading_business_plan_<?php echo e($pKey); ?>"
                                             data-parent="#links_accorodion">
                                            <div class="card-body">
                                                <?php echo $product->description; ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="card">
                                        <div class="card-header" id="heading_business_plan">
                                            <h2 class="mb-0 text-center">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#business_plan" aria-expanded="true"
                                                        aria-controls="business_plan">
                                                    No Data Found
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="business_plan" class="collapse"
                                             aria-labelledby="heading_business_plan"
                                             data-parent="#links_accorodion">
                                            <div class="card-body">
                                                No Data Found
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>