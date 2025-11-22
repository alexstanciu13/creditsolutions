import { useState } from "react";
import { Button } from "./ui/button";
import { Label } from "./ui/label";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "./ui/select";
import { Slider } from "./ui/slider";

export function CreditCalculator() {
  const [creditType, setCreditType] = useState("nevoi");
  const [amount, setAmount] = useState(150000);
  const [period, setPeriod] = useState(240);

  // Simple calculation for monthly payment (this is a simplified formula)
  const calculateMonthlyPayment = () => {
    const interestRates: { [key: string]: number } = {
      nevoi: 0.085,
      ipotecar: 0.065,
      auto: 0.075,
      juridice: 0.07,
      refinantare: 0.06,
      altele: 0.08,
    };

    const annualRate = interestRates[creditType] || 0.07;
    const monthlyRate = annualRate / 12;
    const numPayments = period;

    const monthlyPayment =
      (amount * monthlyRate * Math.pow(1 + monthlyRate, numPayments)) /
      (Math.pow(1 + monthlyRate, numPayments) - 1);

    return monthlyPayment.toFixed(2);
  };

  const calculateDAE = () => {
    const interestRates: { [key: string]: number } = {
      nevoi: 0.085,
      ipotecar: 0.065,
      auto: 0.075,
      juridice: 0.07,
      refinantare: 0.06,
      altele: 0.08,
    };

    const baseRate = interestRates[creditType] || 0.07;
    const dae = (baseRate + 0.015) * 100; // Adding fees for DAE
    return dae.toFixed(2);
  };

  return (
    <div id="calculator" className="bg-white rounded-xl shadow-2xl p-6 md:p-8">
      <h3 className="text-[#003D7A] mb-6 text-xl md:text-2xl">Calculator Credit</h3>

      <div className="space-y-6">
        {/* Credit Type */}
        <div>
          <Label htmlFor="credit-type" className="text-gray-700 mb-2 block">
            Tip Credit
          </Label>
          <Select value={creditType} onValueChange={setCreditType}>
            <SelectTrigger id="credit-type" className="w-full">
              <SelectValue placeholder="Selectează tipul de credit" />
            </SelectTrigger>
            <SelectContent>
              <SelectItem value="nevoi">Credite de Nevoi Personale</SelectItem>
              <SelectItem value="ipotecar">Credit Ipotecar/Prima Casă</SelectItem>
              <SelectItem value="auto">Credite Auto/Leasing</SelectItem>
              <SelectItem value="juridice">Credite Persoane Juridice</SelectItem>
              <SelectItem value="refinantare">Refinanțări de Credit</SelectItem>
              <SelectItem value="altele">Alte Servicii</SelectItem>
            </SelectContent>
          </Select>
        </div>

        {/* Amount */}
        <div>
          <div className="flex justify-between items-center mb-2">
            <Label htmlFor="amount" className="text-gray-700">
              Suma dorită
            </Label>
            <span className="text-[#0066CC]">
              {amount.toLocaleString("ro-RO")} RON
            </span>
          </div>
          <Slider
            id="amount"
            min={10000}
            max={500000}
            step={5000}
            value={[amount]}
            onValueChange={(value) => setAmount(value[0])}
            className="w-full [&_[data-slot=slider-range]]:bg-[#0066CC] [&_[data-slot=slider-thumb]]:border-[#0066CC]"
          />
          <div className="flex justify-between text-xs text-gray-500 mt-1">
            <span>10.000 RON</span>
            <span>500.000 RON</span>
          </div>
        </div>

        {/* Period */}
        <div>
          <div className="flex justify-between items-center mb-2">
            <Label htmlFor="period" className="text-gray-700">
              Perioada (luni)
            </Label>
            <span className="text-[#0066CC]">
              {period} luni ({Math.round(period / 12)} ani)
            </span>
          </div>
          <Slider
            id="period"
            min={12}
            max={360}
            step={12}
            value={[period]}
            onValueChange={(value) => setPeriod(value[0])}
            className="w-full [&_[data-slot=slider-range]]:bg-[#0066CC] [&_[data-slot=slider-thumb]]:border-[#0066CC]"
          />
          <div className="flex justify-between text-xs text-gray-500 mt-1">
            <span>1 an</span>
            <span>30 ani</span>
          </div>
        </div>

        {/* Results */}
        <div className="bg-[#F5F7FA] rounded-lg p-4 space-y-3">
          <div className="flex justify-between items-center">
            <span className="text-gray-600">Rata lunară estimată:</span>
            <span className="text-[#003D7A]">
              {calculateMonthlyPayment()} RON
            </span>
          </div>
          <div className="flex justify-between items-center">
            <span className="text-gray-600">DAE estimat:</span>
            <span className="text-[#0066CC]">{calculateDAE()}%</span>
          </div>
        </div>

        {/* CTA Button */}
        <Button className="w-full bg-[#0066CC] hover:bg-[#0052A3] text-white rounded-lg">
          Vezi oferte personalizate
        </Button>

        <p className="text-xs text-gray-500 text-center">
          * Calculele sunt orientative și pot varia în funcție de banca
          selectată
        </p>
      </div>
    </div>
  );
}