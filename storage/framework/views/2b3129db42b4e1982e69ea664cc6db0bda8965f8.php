 <div class="row"> <div class="col-lg-4"> <div class="panel bg-teal-400 has-bg-image"> <div class="panel-body"> <div class="heading-elements"> </div> <h3 class="no-margin"> <?php echo e($currency_sy); ?> <?php echo e($user_balance); ?> </h3> Available Balance <div class="text-muted text-size-small"> </div> </div> </div> </div> <div class="col-lg-4"> <div class="panel bg-teal-400 has-bg-image"> <div class="panel-body"> <div class="heading-elements"> </div> <h3 class="no-margin"> <?php echo e($currency_sy); ?> <?php echo e($payout_balance); ?> </h3> Withdrawable amount <div class="text-muted text-size-small"> </div> </div> </div> </div> <?php if($date_today < $date_creat_sum): ?> <div class="col-lg-4"> <div class="panel bg-teal-400 has-bg-image"> <div class="panel-body"> <div class="heading-elements"> </div> <p id="demo" style="font-size: 31px;"></p> Time For Next Payout <div class="text-muted text-size-small"> </div> </div> </div> </div> <?php endif; ?> </div> 