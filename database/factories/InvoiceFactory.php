<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Invoice::class;
    public function definition(): array
    {
        $status= $this->faker->randomElement(["B","P","V"]);
        return [
            'customer_id'=>Customer::factory(),
            'amount' => $this->faker->numberBetween(100,20000),
            'status'=> $status,
            'billed_dated'=> $this->faker->dateTimeThisDecade(),
            'paid_dated'=>$status == 'p' ? $this->faker->dateTimeThisDecade() : NULL

            
            //
        ];
    }
}
