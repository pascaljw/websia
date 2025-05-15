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
            Schema::table('dosens', function (Blueprint $table) {
                $table->string('facebook')->nullable()->after('foto');
                $table->string('instagram')->nullable()->after('foto');
                $table->string('linkedin')->nullable()->after('foto');
            });
        }


        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('dosens', function (Blueprint $table) {
        $table->string('facebook')->nullable(false)->change();
        $table->string('instagram')->nullable(false)->change();
        $table->string('linkedin')->nullable(false)->change();
            });
        }
    };
