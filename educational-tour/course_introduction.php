<style>
    #main-content {
        border-radius: 20px;
        background-color: white;
        max-width: 1659px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        box-sizing: border-box;
    }

    .segment {
        margin-bottom: 200px;
    }

    .small-padding {
        padding-right: 33.5px;
        padding-left: 33.5px;
    }

    .med-padding {
        padding-right: 108.5px;
        padding-left: 108.5px;
    }

    .large-padding {
        padding-right: 130px;
        padding-left: 130px;
    }

    @media (max-width: 767px) {
        #main-content {
            padding-left: 20px;
            padding-right: 20px;
        }

        .segment {
            margin-bottom: 40px;
        }

        .small-padding {
            padding-right: 0px;
            padding-left: 0px;
        }

        .med-padding {
            padding-right: 0px;
            padding-left: 0px;
        }

        .large-padding {
            padding-right: 0px;
            padding-left: 0px;
        }
    }
</style>
<div class="" id="main-content">

    <div class="" style="margin-top: 2em;">
        <div class="col-md-12 text-left segment med-padding">
            <?php include "about.php" ?>
        </div>

        <div class="col-md-12 text-center segment small-padding">
            <?php include "family.php" ?>
        </div>

        <div class="col-md-12 text-center segment large-padding">
            <?php include "who.php" ?>
        </div>

        <div class="col-md-12 text-center segment">
            <?php include "parent.php" ?>
        </div>

        <div class="col-md-12 text-center segment large-padding">
            <?php include "tour.php" ?>
        </div>

        <div class="segment" style="margin-bottom: 200px;">
            <?php include "e-sim.php" ?>
        </div>

        <div class="segment">
            <?php include "talk.php" ?>
        </div>
    </div>
</div>