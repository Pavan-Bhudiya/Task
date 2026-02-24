public function up(): void
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('wallet_id')->constrained()->cascadeOnDelete();
        $table->decimal('amount', 12, 2);
        $table->enum('type', ['income', 'expense']);
        $table->string('description')->nullable();
        $table->timestamps();
    });
}