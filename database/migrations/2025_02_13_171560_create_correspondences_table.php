<?php

use App\Models\Department;
use App\Models\FilingArea;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('correspondences', function (Blueprint $table) {
            $table->id();
            $table->string('file_number')->nullable();
            $table->string('subject');
            $table->foreignIdFor(FilingArea::class);
            $table->string('received_from')->nullable();
            $table->date('correspondence_date')->nullable();
            $table->date('date_received');
            $table->date('date_sent')->nullable();
            $table->text('comments')->nullable();
            $table->boolean('flagged')->default(false);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Department::class, 'creator_department_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correspondences');
    }
};
