<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_type'); // Type de quiz (JS ou PHP)
            $table->integer('score'); // Score obtenu par l'utilisateur
            $table->integer('played_count'); // Nombre de fois que le quiz a été joué par l'utilisateur
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clé étrangère vers la table des utilisateurs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
