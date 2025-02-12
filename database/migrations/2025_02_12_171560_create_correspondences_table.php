<?php

use App\Models\FilingArea;
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
            $table->string('received_from');
            $table->date('correspondence_date');
            $table->date('date_received');
            $table->date('date_sent');
            $table->text('comments')->nullable();
            $table->boolean('flagged')->default(false);
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
