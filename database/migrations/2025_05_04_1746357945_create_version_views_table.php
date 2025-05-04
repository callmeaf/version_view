<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('version_views', function (Blueprint $table) {
            $table->id();
            /**
             * @var \Callmeaf\User\App\Repo\Contracts\UserRepoInterface $userRepo
             */
            $userRepo = app(\Callmeaf\User\App\Repo\Contracts\UserRepoInterface::class);
            $table->foreignIdFor($userRepo->getModel()::class)->constrained()->cascadeOnDelete();
            /**
             * @var \Callmeaf\Version\App\Repo\Contracts\VersionRepoInterface $versionRepo
             */
            $versionRepo = app(\Callmeaf\Version\App\Repo\Contracts\VersionRepoInterface::class);
            $table->foreignIdFor($versionRepo->getModel()::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('version_views');
    }
};
