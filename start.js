// checkSystem.js
// Cara menjalankan:
// 1. npm install systeminformation
// 2. node checkSystem.js

import si from "systeminformation";

async function checkSystem() {
  try {
    // Battery
    const battery = await si.battery();
    console.log("=== Battery Info ===");
    console.log(`Is Charging: ${battery.isCharging}`);
    console.log(`Percentage: ${battery.percent}%`);
    console.log(`AC Connected: ${battery.acConnected}`);
    console.log(`Time Remaining: ${battery.timeRemaining} minutes`);

    // CPU
    const cpu = await si.cpu();
    console.log("\n=== CPU Info ===");
    console.log(`Manufacturer: ${cpu.manufacturer}`);
    console.log(`Brand: ${cpu.brand}`);
    console.log(`Cores: ${cpu.cores}`);
    console.log(`Speed: ${cpu.speed} GHz`);

    // Memory
    const mem = await si.mem();
    console.log("\n=== Memory Info ===");
    console.log(`Total: ${(mem.total / 1024 / 1024 / 1024).toFixed(2)} GB`);
    console.log(`Free: ${(mem.free / 1024 / 1024 / 1024).toFixed(2)} GB`);
    console.log(`Used: ${(mem.used / 1024 / 1024 / 1024).toFixed(2)} GB`);

    // Operating System
    const osInfo = await si.osInfo();
    console.log("\n=== Operating System ===");
    console.log(`Platform: ${osInfo.platform}`);
    console.log(`Distro: ${osInfo.distro}`);
    console.log(`Release: ${osInfo.release}`);

    // Disk
    const disk = await si.diskLayout();
    console.log("\n=== Disk Info ===");
    disk.forEach((d, index) => {
      console.log(`Disk ${index + 1}: ${d.name}, Size: ${(d.size / 1024 / 1024 / 1024).toFixed(2)} GB`);
    });

  } catch (err) {
    console.error("Error retrieving system information:", err);
  }
}

checkSystem();
