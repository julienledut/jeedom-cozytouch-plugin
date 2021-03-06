<?php

class CozyTouchCmdDisplay
{
	const DISPLAY_DASH = [
		'numeric'=>'tilecozy',
		'string'=>'badge',
		'binaire'=>''
	];
	const DISPLAY_MOBILE = [
		'numeric'=>'tile',
		'string'=>'badge',
		'binaire'=>''
	];
}

class CozyTouchPlaceInfo
{
    const CTPI_OID = "oid";
    const CTPI_NAME = "label";
    const CTPI_DEVICES = "devices";
}

class CozyTouchDeviceInfo
{
    const CTDI_OID = "oid";
    const CTDI_URL = "deviceURL";
    const CTDI_LABEL = "label";
    const CTDI_STATES = "states";
    const CTDI_SENSORS = "sensors";
    const CTDI_PLACEOID = "placeOID";
    const CTDI_TYPEDEVICE = "uiClass";
    const CTDI_REFERENCE = "referenceURL";
	const CTDI_OBJECT = "object";
	const CTDI_CONTROLLABLENAME = "controllableName";
}

class CozyTouchDeviceStateInfo
{
	const CTDSI_NAME = "name";
	const CTDSI_VALUE = "value";
}

class CozyTouchDeviceToDisplay
{
	const CTDTD_HEATINGSYSTEM = "HeatingSystem";
	const CTDTD_WATERHEATINGSYSTEM = "WaterHeatingSystem";
	const CTDTD_VENTILATIONSYSTEM ="VentilationSystem";
	const CTDTD_HEATPUMPSYSTEM ="HeatPump";

	const CTDTD_ATLANTICELECTRICHEATER = "io:AtlanticElectricalHeaterIOComponent";

	const CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP ="io:AtlanticElectricalHeaterWithAdjustableTemperatureSetpointIOComponent";
	const CTDTD_ATLANTICTEMPERATURESENSOR = "io:TemperatureInCelciusIOSystemDeviceSensor";
	const CTDTD_ATLANTICELECTRICHEATEROCCUPANCYSENSOR = "io:OccupancyIOSystemDeviceSensor";
	const CTDTD_ATLANTICELECTRICHEATERELECTRICITYSENSOR = "io:CumulatedElectricalEnergyConsumptionIOSystemDeviceSensor";
	
	const CTDTD_ATLANTICHOTWATER ="io:AtlanticDomesticHotWaterProductionIOComponent";
	const CTDTD_ATLANTICHOTWATERSPLIT ="io:AtlanticDomesticHotWaterProductionV2_SPLIT_IOComponent";
	const CTDTD_ATLANTICHOTWATERFLATC2 ="io:AtlanticDomesticHotWaterProductionV2_CE_FLAT_C2_IOComponent";
	const CTDTD_ATLANTICHOTWATERCETHIV4 ="io:AtlanticDomesticHotWaterProductionV2_CETHI_V4_IOComponent";
	const CTDTD_ATLANTICHOTWATERELECTRICITYSENSOR ="io:DHWCumulatedElectricalEnergyConsumptionIOSystemDeviceSensor";

	const CTDTD_ATLANTICHEATRECOVERYVENT ="io:AtlanticHeatRecoveryVentilationIOComponent";
	const CTDTD_ATLANTICC02SENSOR ="io:CO2IOSystemDeviceSensor";

	const CTDTD_ATLANTICPASSAPCHEATPUMPMAIN="io:AtlanticPassAPCHeatPumpMainComponent";
	const CTDTD_ATLANTICPASSAPCDHW="io:AtlanticPassAPCDHWComponent";
	const CTDTD_ATLANTICPASSAPCOUTSIDETEMPERATURESENSOR ="io:AtlanticPassAPCOutsideTemperatureSensor";
	const CTDTD_TOTALENERGYCONSUMPTIONSENSOR ="io:TotalElectricalEnergyConsumptionSensor";
	const CTDTD_DHWENERGYCONSUMPTIONSENSOR ="io:DHWRelatedElectricalEnergyConsumptionSensor";
	const CTDTD_HEATINGENERGYCONSUMPTIONSENSOR ="io:HeatingRelatedElectricalEnergyConsumptionSensor";
	const CTDTD_ATLANTICPASSAPCHEATINGCOOLINGZONE ="io:AtlanticPassAPCHeatingAndCoolingZoneComponent";
	const CTDTD_ATLANTICPASSAPCZONETEMPERATURESENSOR ="io:AtlanticPassAPCZoneTemperatureSensor";
	

	const CTDTD_DEVICEMODEL = [
		self::CTDTD_ATLANTICELECTRICHEATER,
		self::CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP,
		self::CTDTD_ATLANTICHOTWATER,
		self::CTDTD_ATLANTICHOTWATERSPLIT,
		self::CTDTD_ATLANTICHOTWATERCETHIV4,
		self::CTDTD_ATLANTICHOTWATERFLATC2,
		self::CTDTD_ATLANTICHEATRECOVERYVENT,
		self::CTDTD_ATLANTICPASSAPCHEATPUMPMAIN
	];

	const CTDTD_NAME = [
		self::CTDTD_HEATINGSYSTEM=>"Radiateur",
		self::CTDTD_WATERHEATINGSYSTEM=>"Chauffe eau",
		self::CTDTD_VENTILATIONSYSTEM=>"VMC",
		
		self::CTDTD_HEATPUMPSYSTEM=>"Pompe à chaleur"
	];

	const CTDTD_DEVICESANDSENSORS = [
		self::CTDTD_ATLANTICELECTRICHEATER,
		self::CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP,
		self::CTDTD_ATLANTICTEMPERATURESENSOR,
		self::CTDTD_ATLANTICELECTRICHEATEROCCUPANCYSENSOR,
		self::CTDTD_ATLANTICELECTRICHEATERELECTRICITYSENSOR,
		self::CTDTD_ATLANTICHOTWATER,
		self::CTDTD_ATLANTICHOTWATERSPLIT,
		self::CTDTD_ATLANTICHOTWATERCETHIV4,
		self::CTDTD_ATLANTICHOTWATERFLATC2,
		self::CTDTD_ATLANTICHOTWATERELECTRICITYSENSOR,
		self::CTDTD_ATLANTICHEATRECOVERYVENT,
		self::CTDTD_ATLANTICC02SENSOR,
		
		self::CTDTD_ATLANTICPASSAPCHEATPUMPMAIN,
		self::CTDTD_ATLANTICPASSAPCDHW,
		self::CTDTD_ATLANTICPASSAPCOUTSIDETEMPERATURESENSOR,
		self::CTDTD_TOTALENERGYCONSUMPTIONSENSOR,
		self::CTDTD_DHWENERGYCONSUMPTIONSENSOR,
		self::CTDTD_HEATINGENERGYCONSUMPTIONSENSOR,
		self::CTDTD_ATLANTICPASSAPCHEATINGCOOLINGZONE,
		self::CTDTD_ATLANTICPASSAPCZONETEMPERATURESENSOR
	
	];
}

class CozyTouchStateName
{
	const CTSN_NAME = "core:NameState";
	const CTSN_CONNECT = "core:StatusState";
	const CTSN_OPEMODE = "core:OperatingModeState";
	const CTSN_ONOFF = "core:OnOffState";
	const CTSN_TARGETHEATLEVEL = "io:TargetHeatingLevelState";
	const CTSN_TARGETTEMP = "core:TargetTemperatureState";
	const CTSN_COMFROOMTEMP = "core:ComfortRoomTemperatureState";
	const CTSN_ECOROOMTEMP = "core:EcoRoomTemperatureState";
	const CTSN_DEROGTARGETTEMP = "core:DerogatedTargetTemperatureState";
	const CTSN_EFFTEMPSETPOINT = "io:EffectiveTemperatureSetpointState";
	const CTSN_TEMPPROBECALIBR = "io:TemperatureProbeCalibrationOffsetState";
	const CTSN_OCCUPANCY = "core:OccupancyState";
	const CTSN_ELECNRJCONSUMPTION = "core:ElectricEnergyConsumptionState";

	const CTSN_BOOSTMODEDURATION = "core:BoostModeDurationState";
	const CTSN_TEMP = "core:TemperatureState";
	const CTSN_WATERCONSUMPTION = "core:WaterConsumptionState";
	const CTSN_AWAYMODEDURATION = "io:AwayModeDurationState";
	const CTSN_MIDDLETEMP = "io:MiddleWaterTemperatureState";
	const CTSN_DHWMODE = "io:DHWModeState";
	const CTSN_DHWCAPACITY = "io:DHWCapacityState";

	const CTSN_DHWBOOSTMODE = "io:DHWBoostModeState";
	const CTSN_DHWABSENCEMODE = "io:DHWAbsenceModeState";
	const CTSN_NUMBERTANK = "core:NumberOfTankState";
	const CTSN_V40WATERVOLUME = "core:V40WaterVolumeEstimationState";
	const CTSN_WATERTEMP = "core:WaterTemperatureState";
	const CTSN_WATERTARGETTEMP = "core:WaterTargetTemperatureState";
	const CTSN_EXPECTEDNBSHOWER = "core:ExpectedNumberOfShowerState";
	const CTSN_CTRLWATERTARGETTEMP = "core:ControlWaterTargetTemperatureState";
	const CTSN_MIDDLEWATERTEMPIN = "core:MiddleWaterTemperatureInState";
	const CTSN_HEATINGSTATUS = "core:HeatingStatusState";
	const CTSN_NBSHOWERREMAINING = "core:NumberOfShowerRemainingState";
	const CTSN_MINISHOWERMANUAL = "core:MinimalShowerManualModeState";
	const CTSN_MAXISHOWERMANUAL = "core:MaximalShowerManualModeState";

	const CTSN_AIRDEMANDE ="core:AirDemandState";
	const CTSN_VENTILATIONCONFIG ="io:VentilationConfigurationModeState";
	const CTSN_AIRDEMANDEMODE ="io:AirDemandModeState";
	const CTSN_VENTILATIONMODE ="io:VentilationModeState"; // Atention {"prog": "off",	"endOfLineTest": "off",	"test": "off","month": 12,"cooling": "off","leapYear": "off","day": 18,"dayNight": "night"	}
	const CTSN_CO2CONCENTRATION = "core:CO2ConcentrationState";


	
	// Pompe à chaleur
	const CTSN_PASSAPCPRODUCTTYPE = "io:PassAPCProductTypeState";
	const CTSN_ZONESNUMBER = "core:ZonesNumberState";
	const CTSN_PASSAPCOPERATINGMODE = "io:PassAPCOperatingModeState";
	const CTSN_THERMALSCHEDULINGMODE = "io:ThermalSchedulingModeState";
	const CTSN_ABSENCESCHEDULINGMODE = "io:AbsenceSchedulingModeState";
	const CTSN_ABSENCEHEATINGTARGETTEMP = "core:AbsenceHeatingTargetTemperatureState";
	const CTSN_LASTPASSAPCOPERATINGMODE = "io:LastPassAPCOperatingModeState";

	const CTSN_PASSAPCDHWCONFIGURATION = "io:PassAPCDHWConfigurationState";
	const CTSN_PASSAPCDHWMODE= "io:PassAPCDHWModeState";
	const CTSN_PASSAPCDHWPROFILE= "io:PassAPCDHWProfileState";
	const CTSN_COMFORTTARGETDHWTEMPERATURE= "core:ComfortTargetDHWTemperatureState";
	const CTSN_ECOTARGETDHWTEMPERATURE= "core:EcoTargetDHWTemperatureState";
	const CTSN_TARGETDHWTEMPERATURE= "core:TargetDHWTemperatureState";
	const CTSN_BOOSTONOFF= "core:BoostOnOffState";
	const CTSN_DHWONOFF= "core:DHWOnOffState";

	const CTSN_THERMALCONFIGURATION= "core:ThermalConfigurationState";
	const CTSN_PASSAPCHEATINGMODE= "io:PassAPCHeatingModeState";
	const CTSN_PASSAPCCOOLINGMODE="io:PassAPCCoolingModeState";
	const CTSN_PASSAPCHEATINGPROFILE="io:PassAPCHeatingProfileState";
	const CTSN_PASSAPCCOOLINGPROFILE="io:PassAPCCoolingProfileState";

	const CTSN_COMFORTHEATINGTARGETTEMP="core:ComfortHeatingTargetTemperatureState";
	const CTSN_ECOHEATINGTARGETTEMP="core:EcoHeatingTargetTemperatureState";
	const CTSN_COMFORTCOOLINGTARGETTEMP="core:ComfortCoolingTargetTemperatureState";
	const CTSN_ECOCOOLINGTARGETTEMP="core:EcoCoolingTargetTemperatureState";
	const CTSN_DEROGATIONREMAININGTIME="io:DerogationRemainingTimeState";
	const CTSN_HEATINGONOFF="core:HeatingOnOffState";
	const CTSN_COOLINGONOFF="core:CoolingOnOffState";
	const CTSN_DEROGATIONONOFF="core:DerogationOnOffState";


	const EQ_VMCMODE ="vmcMode";
	const EQ_VMCTEMPINSUFFLE="vmcTempInsuffle";
	const EQ_VMCTEMPEXT="vmcTempExt";
	const EQ_HOTWATERCOEFF = "hotWaterCoefficient";

	const CTSN_TYPE = [
		self::CTSN_NAME=>"string",
		self::CTSN_OPEMODE=>"string",
		self::CTSN_TARGETHEATLEVEL=>"string",
		self::CTSN_DHWMODE=>"string",
		self::CTSN_VENTILATIONCONFIG=>"string",
		self::CTSN_VENTILATIONMODE=>"string",
		self::CTSN_AIRDEMANDEMODE=>"string",

		self::CTSN_HEATINGSTATUS=>"string",
		self::CTSN_DHWBOOSTMODE=>"string", // on / off / prog
		self::CTSN_DHWABSENCEMODE=>"string",

		self::CTSN_PASSAPCDHWPROFILE=>"string",
		self::CTSN_PASSAPCDHWMODE=>"string",
		self::CTSN_PASSAPCDHWCONFIGURATION=>"string",
		self::CTSN_THERMALCONFIGURATION=>"string",
		self::CTSN_PASSAPCHEATINGMODE=>"string",
		self::CTSN_PASSAPCCOOLINGMODE=>"string",
		self::CTSN_PASSAPCHEATINGPROFILE=>"string",
		self::CTSN_PASSAPCCOOLINGPROFILE=>"string",

		self::EQ_VMCMODE=>"string",

		self::CTSN_TARGETTEMP=>"numeric",
		self::CTSN_COMFROOMTEMP=>"numeric",
		self::CTSN_ECOROOMTEMP=>"numeric",
		self::CTSN_DEROGTARGETTEMP=>"numeric",
		self::CTSN_EFFTEMPSETPOINT=>"numeric",
		self::CTSN_TEMPPROBECALIBR=>"numeric",
		self::CTSN_BOOSTMODEDURATION=>"numeric",
		self::CTSN_TEMP=>"numeric",
		self::CTSN_WATERCONSUMPTION=>"numeric",
		self::CTSN_AWAYMODEDURATION=>"numeric",
		self::CTSN_DHWCAPACITY=>"numeric",
		self::CTSN_ELECNRJCONSUMPTION=>"numeric",
		self::EQ_HOTWATERCOEFF => "numeric",
		self::CTSN_AIRDEMANDE => "numeric",
		self::CTSN_CO2CONCENTRATION => "numeric",
		self::CTSN_MIDDLETEMP=>"numeric",

		self::CTSN_NUMBERTANK=>"numeric",
		self::CTSN_V40WATERVOLUME=>"numeric",
		self::CTSN_WATERTEMP=>"numeric",
		self::CTSN_WATERTARGETTEMP=>"numeric",
		self::CTSN_EXPECTEDNBSHOWER=>"numeric",
		self::CTSN_WATERTARGETTEMP=>"numeric",
		self::CTSN_CTRLWATERTARGETTEMP=>"numeric",
		self::CTSN_MIDDLEWATERTEMPIN=>"numeric",
		self::CTSN_NBSHOWERREMAINING=>"numeric",
		self::CTSN_MINISHOWERMANUAL=>"numeric",
		self::CTSN_MAXISHOWERMANUAL=>"numeric",

		self::CTSN_ECOTARGETDHWTEMPERATURE=>"numeric",
		self::CTSN_COMFORTTARGETDHWTEMPERATURE=>"numeric",
		self::CTSN_TARGETDHWTEMPERATURE=>"numeric",
		self::CTSN_COMFORTHEATINGTARGETTEMP=>"numeric",
		self::CTSN_ECOHEATINGTARGETTEMP=>"numeric",
		self::CTSN_COMFORTCOOLINGTARGETTEMP=>"numeric",
		self::CTSN_ECOCOOLINGTARGETTEMP=>"numeric",
		self::CTSN_DEROGATIONREMAININGTIME=>"numeric",

		self::EQ_VMCTEMPINSUFFLE => "numeric",
		self::EQ_VMCTEMPEXT=>"numeric",

		self::CTSN_OCCUPANCY=>"binary",
		self::CTSN_ONOFF=>"binary",
		self::CTSN_CONNECT=>"binary",

		self::CTSN_BOOSTONOFF=>"binary",
		self::CTSN_DHWONOFF=>"binary",
		self::CTSN_HEATINGONOFF=>"binary",
		self::CTSN_COOLINGONOFF=>"binary",
		self::CTSN_DEROGATIONONOFF=>"binary",
	];

	const CTSN_LABEL = [
		self::CTSN_NAME=>"Label",
		self::CTSN_OPEMODE=>"Programation",
		self::CTSN_ONOFF=>"On/Off",
		self::CTSN_TARGETHEATLEVEL=>"Mode",
		self::CTSN_DHWMODE=>"Mode",

		self::CTSN_TARGETTEMP=>"Temp. Cible",
		self::CTSN_COMFROOMTEMP=>"Temp. Comfort",
		self::CTSN_ECOROOMTEMP=>"Temp. Eco",
		self::CTSN_DEROGTARGETTEMP=>"Temp. Derogation",
		self::CTSN_EFFTEMPSETPOINT=>"Effective",
		self::CTSN_TEMPPROBECALIBR=>"Calibrage",
		self::CTSN_BOOSTMODEDURATION=>"Boost Durée",
		self::CTSN_TEMP=>"Température",
		self::CTSN_MIDDLETEMP=>"Température",
		self::CTSN_WATERCONSUMPTION=>"Eau chaude",
		self::CTSN_AWAYMODEDURATION=>"Absent Durée",
		self::CTSN_DHWCAPACITY=>"Capacité Eau",
		self::CTSN_ELECNRJCONSUMPTION=>"Conso Elec",
		self::CTSN_OCCUPANCY=>"Présence",
		self::CTSN_CONNECT=>"Connect",

		self::CTSN_HEATINGSTATUS=>"Heat status",
		self::CTSN_DHWBOOSTMODE=>"Boost Mode",
		self::CTSN_DHWABSENCEMODE=>"Absence Mode",
		self::CTSN_NUMBERTANK=>"Nb Tank",
		self::CTSN_V40WATERVOLUME=>"Volume Eau à 40",
		self::CTSN_WATERTEMP=>"Temp. eau 1",
		self::CTSN_WATERTARGETTEMP=>"Temp. eau cible",
		self::CTSN_EXPECTEDNBSHOWER=>"Douches souhaitées",
		self::CTSN_CTRLWATERTARGETTEMP=>"Temp. ctrl temp. eau cible",
		self::CTSN_MIDDLEWATERTEMPIN=>"Temp. eau 2",
		self::CTSN_NBSHOWERREMAINING=>"Douches restantes",
		self::CTSN_MINISHOWERMANUAL=>"Mini douche",
		self::CTSN_MAXISHOWERMANUAL=>"Maxi douche",

		self::CTSN_VENTILATIONCONFIG=>"Configuration",
		self::CTSN_VENTILATIONMODE=>"Ventilation mode",
		self::CTSN_AIRDEMANDEMODE=>"Air mode",
		self::CTSN_AIRDEMANDE => "Air demande",
		self::CTSN_CO2CONCENTRATION => "C02",
		
		self::CTSN_PASSAPCDHWMODE=>"Mode",
		self::CTSN_PASSAPCDHWPROFILE=>"Profil",
		self::CTSN_PASSAPCDHWCONFIGURATION=>"Config",
		self::CTSN_ECOTARGETDHWTEMPERATURE=>"Temp. eco",
		self::CTSN_COMFORTTARGETDHWTEMPERATURE=>"Temp. confort",
		self::CTSN_TARGETDHWTEMPERATURE=>"Temp. cible",
		self::CTSN_BOOSTONOFF=>"Boost State",
		self::CTSN_DHWONOFF=>"On/Off State",
		self::CTSN_HEATINGONOFF=>"Heating",
		self::CTSN_COOLINGONOFF=>"Cooling",
		self::CTSN_DEROGATIONONOFF=>"Derogation",
		self::CTSN_COMFORTHEATINGTARGETTEMP=>"Temp. confort heat",
		self::CTSN_ECOHEATINGTARGETTEMP=>"Temp. eco heat",
		self::CTSN_COMFORTCOOLINGTARGETTEMP=>"Temp confort cool",
		self::CTSN_ECOCOOLINGTARGETTEMP=>"Temp eco cool",
		self::CTSN_DEROGATIONREMAININGTIME=>"Derogation durée",
		self::CTSN_THERMALCONFIGURATION=>"Profil",
		self::CTSN_PASSAPCHEATINGMODE=>"Mode heat",
		self::CTSN_PASSAPCCOOLINGMODE=>"Mode cool",
		self::CTSN_PASSAPCHEATINGPROFILE=>"Profile heat",
		self::CTSN_PASSAPCCOOLINGPROFILE=>"Profile cool",



		self::EQ_VMCMODE => "VMC Mode",
		self::EQ_HOTWATERCOEFF => "Proportion eau chaude",
		
		self::EQ_VMCTEMPINSUFFLE => "Temp insufflé",
		self::EQ_VMCTEMPEXT=>"Temp extérieur"
	];
}

class CozyTouchDeviceStateName
{
	const DEVICE_STATENAME = [
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATER=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_ONOFF,
			CozyTouchStateName::CTSN_TARGETHEATLEVEL],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_OPEMODE,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_ONOFF,
			CozyTouchStateName::CTSN_TARGETHEATLEVEL,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_COMFROOMTEMP,
			CozyTouchStateName::CTSN_ECOROOMTEMP,
			CozyTouchStateName::CTSN_DEROGTARGETTEMP,
			CozyTouchStateName::CTSN_EFFTEMPSETPOINT,
			CozyTouchStateName::CTSN_TEMPPROBECALIBR],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATER=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_TEMP,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERSPLIT=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERCETHIV4=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_V40WATERVOLUME,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERFLATC2=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_DHWCAPACITY,
			CozyTouchStateName::CTSN_DHWBOOSTMODE,
			CozyTouchStateName::CTSN_DHWABSENCEMODE,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_V40WATERVOLUME,
			CozyTouchStateName::CTSN_WATERTEMP,
			CozyTouchStateName::CTSN_WATERTARGETTEMP,
			CozyTouchStateName::CTSN_EXPECTEDNBSHOWER,
			CozyTouchStateName::CTSN_CTRLWATERTARGETTEMP,
			CozyTouchStateName::CTSN_MIDDLEWATERTEMPIN,
			CozyTouchStateName::CTSN_HEATINGSTATUS,
			CozyTouchStateName::CTSN_NBSHOWERREMAINING,
			CozyTouchStateName::CTSN_MINISHOWERMANUAL,
			CozyTouchStateName::CTSN_MAXISHOWERMANUAL
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHEATRECOVERYVENT=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_AIRDEMANDEMODE,
			CozyTouchStateName::CTSN_AIRDEMANDE,
			CozyTouchStateName::CTSN_VENTILATIONMODE,
			CozyTouchStateName::CTSN_VENTILATIONCONFIG],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCHEATPUMPMAIN=>[
			CozyTouchStateName::CTSN_CONNECT],
				
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCDHW=>[
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_DHWONOFF,
			CozyTouchStateName::CTSN_PASSAPCDHWMODE,
			CozyTouchStateName::CTSN_PASSAPCDHWPROFILE,
			CozyTouchStateName::CTSN_PASSAPCDHWCONFIGURATION,
			CozyTouchStateName::CTSN_TARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_ECOTARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_COMFORTTARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_BOOSTONOFF],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCHEATINGCOOLINGZONE=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_THERMALCONFIGURATION,
			CozyTouchStateName::CTSN_PASSAPCHEATINGMODE,
			CozyTouchStateName::CTSN_PASSAPCCOOLINGMODE,
			CozyTouchStateName::CTSN_PASSAPCHEATINGPROFILE,
			CozyTouchStateName::CTSN_PASSAPCCOOLINGPROFILE,
			CozyTouchStateName::CTSN_COMFORTHEATINGTARGETTEMP,
			CozyTouchStateName::CTSN_ECOHEATINGTARGETTEMP,
			CozyTouchStateName::CTSN_COMFORTCOOLINGTARGETTEMP,
			CozyTouchStateName::CTSN_ECOCOOLINGTARGETTEMP,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DEROGTARGETTEMP,
			CozyTouchStateName::CTSN_DEROGATIONREMAININGTIME,
			CozyTouchStateName::CTSN_DEROGATIONONOFF,
			CozyTouchStateName::CTSN_HEATINGONOFF,
			CozyTouchStateName::CTSN_COOLINGONOFF,
			CozyTouchStateName::CTSN_CONNECT],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICTEMPERATURESENSOR=>[
			CozyTouchStateName::CTSN_TEMP],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCZONETEMPERATURESENSOR=>[
			CozyTouchStateName::CTSN_TEMP],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCOUTSIDETEMPERATURESENSOR=>[
			CozyTouchStateName::CTSN_TEMP],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATEROCCUPANCYSENSOR=>[
			CozyTouchStateName::CTSN_OCCUPANCY],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATERELECTRICITYSENSOR=>[
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],
		CozyTouchDeviceToDisplay::CTDTD_TOTALENERGYCONSUMPTIONSENSOR=>[
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],
		CozyTouchDeviceToDisplay::CTDTD_DHWENERGYCONSUMPTIONSENSOR=>[
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],
		CozyTouchDeviceToDisplay::CTDTD_HEATINGENERGYCONSUMPTIONSENSOR=>[
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERELECTRICITYSENSOR=>[
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICC02SENSOR=>[
			CozyTouchStateName::CTSN_CO2CONCENTRATION],
	];

	const EQLOGIC_STATENAME = [
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATER=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_ONOFF,
			CozyTouchStateName::CTSN_TARGETHEATLEVEL],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_OPEMODE,
			CozyTouchStateName::CTSN_ONOFF,
			CozyTouchStateName::CTSN_TARGETHEATLEVEL,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_COMFROOMTEMP,
			CozyTouchStateName::CTSN_ECOROOMTEMP,
			CozyTouchStateName::CTSN_DEROGTARGETTEMP,
			CozyTouchStateName::CTSN_EFFTEMPSETPOINT,
			CozyTouchStateName::CTSN_TEMPPROBECALIBR,
			CozyTouchStateName::CTSN_TEMP,
			CozyTouchStateName::CTSN_OCCUPANCY,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATER=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_TEMP,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERSPLIT=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERCETHIV4=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_V40WATERVOLUME,
			CozyTouchStateName::CTSN_BOOSTMODEDURATION,
			CozyTouchStateName::CTSN_AWAYMODEDURATION,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DHWCAPACITY,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERFLATC2=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_DHWMODE,
			CozyTouchStateName::CTSN_WATERCONSUMPTION,
			CozyTouchStateName::CTSN_DHWCAPACITY,
			CozyTouchStateName::CTSN_DHWBOOSTMODE,
			CozyTouchStateName::CTSN_DHWABSENCEMODE,
			CozyTouchStateName::CTSN_MIDDLETEMP,
			CozyTouchStateName::CTSN_V40WATERVOLUME,
			CozyTouchStateName::CTSN_WATERTEMP,
			CozyTouchStateName::CTSN_WATERTARGETTEMP,
			CozyTouchStateName::CTSN_EXPECTEDNBSHOWER,
			CozyTouchStateName::CTSN_CTRLWATERTARGETTEMP,
			CozyTouchStateName::CTSN_MIDDLEWATERTEMPIN,
			CozyTouchStateName::CTSN_HEATINGSTATUS,
			CozyTouchStateName::CTSN_NBSHOWERREMAINING,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION,
			CozyTouchStateName::CTSN_MINISHOWERMANUAL,
			CozyTouchStateName::CTSN_MAXISHOWERMANUAL],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHEATRECOVERYVENT=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_TEMP,
			CozyTouchStateName::EQ_VMCTEMPINSUFFLE,
			CozyTouchStateName::EQ_VMCTEMPEXT,

			CozyTouchStateName::CTSN_AIRDEMANDEMODE, // "auto","away","boost","high"
			CozyTouchStateName::CTSN_AIRDEMANDE,
			CozyTouchStateName::CTSN_VENTILATIONMODE,
			CozyTouchStateName::CTSN_VENTILATIONCONFIG, //"comfort","eco","standard"
			CozyTouchStateName::CTSN_CO2CONCENTRATION],
		
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCHEATPUMPMAIN=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_ELECNRJCONSUMPTION],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCDHW=>[
			CozyTouchStateName::CTSN_CONNECT,
			CozyTouchStateName::CTSN_DHWONOFF,
			CozyTouchStateName::CTSN_PASSAPCDHWMODE,
			CozyTouchStateName::CTSN_PASSAPCDHWPROFILE,
			CozyTouchStateName::CTSN_PASSAPCDHWCONFIGURATION,
			CozyTouchStateName::CTSN_TARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_ECOTARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_COMFORTTARGETDHWTEMPERATURE,
			CozyTouchStateName::CTSN_BOOSTONOFF],

		CozyTouchDeviceToDisplay::CTDTD_ATLANTICPASSAPCHEATINGCOOLINGZONE=>[
			CozyTouchStateName::CTSN_NAME,
			CozyTouchStateName::CTSN_THERMALCONFIGURATION,
			CozyTouchStateName::CTSN_PASSAPCHEATINGMODE,
			CozyTouchStateName::CTSN_PASSAPCCOOLINGMODE,
			CozyTouchStateName::CTSN_PASSAPCHEATINGPROFILE,
			CozyTouchStateName::CTSN_PASSAPCCOOLINGPROFILE,
			CozyTouchStateName::CTSN_COMFORTHEATINGTARGETTEMP,
			CozyTouchStateName::CTSN_ECOHEATINGTARGETTEMP,
			CozyTouchStateName::CTSN_COMFORTCOOLINGTARGETTEMP,
			CozyTouchStateName::CTSN_ECOCOOLINGTARGETTEMP,
			CozyTouchStateName::CTSN_TARGETTEMP,
			CozyTouchStateName::CTSN_DEROGTARGETTEMP,
			CozyTouchStateName::CTSN_DEROGATIONREMAININGTIME,
			CozyTouchStateName::CTSN_DEROGATIONONOFF,
			CozyTouchStateName::CTSN_HEATINGONOFF,
			CozyTouchStateName::CTSN_COOLINGONOFF,
			CozyTouchStateName::CTSN_TEMP,
			CozyTouchStateName::CTSN_CONNECT]
	];
}


class CozyTouchDeviceSensorInfo
{
	const CTDSI_OID = "oid";
    const CTDSI_URL = "deviceURL";
    const CTDSI_STATES = "states";
}

class CozyTouchDeviceEqCmds
{
	const SET_STANDBY = "setStandByMode";
	const SET_BASIC = "setBasicMode";
	const SET_EXTERNAL = "setExternalMode";
	const SET_INTERNAL = "setInternalMode";
	const SET_AUTO = "setAutoMode";
	const SET_TARGETTEMP ="setTargetTemperature";
	const SET_THERMOSTAT ='cozytouchThermostat';

	const RESET_HEATINGLEVEL='resetHeatingLevel';

	const SET_OFF="setOff";
	const SET_FROSTPROTECT="setFrostProtection";
	const SET_ECO="setEco";
	const SET_COMFORT2="setComfort2";
	const SET_COMFORT1="setComfort1";
	const SET_COMFORT="setComfort";
	const SET_AUTOMODE="setAutoMode";
	const SET_MANUECOACTIVE="setManualEcoActive";
	const SET_MANUECOINACTIVE="setManualEcoInactive";
	const SET_BOOSTDURATION="setBoostModeDuration";
	const SET_BOOST='setBoost';
	const SET_AWAY='setAway';
	const SET_AWAYDURATION='setAwayDuration';
	const SET_EXPECTEDSHOWER='setExpectedNumberOfShower';

	const SET_ONOFF="setOnOff";

	const SET_VENTBOOST ='setVentBoost';
	const SET_VENTHIGH ='setVentHigh';
	const SET_VENTREFRESH ='setVentRefresh';
	const SET_VENTMANUAL ='setVentManual';
	const SET_VENTPROG ='setVentProg';
	const SET_VENTAUTO ='setVentAuto';

	const EQLOGIC_ACTIONS = [
		
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATER=>[
			self::SET_OFF,
			self::SET_FROSTPROTECT,
			self::SET_ECO,
			self::SET_COMFORT2,
			self::SET_COMFORT1,
			self::SET_COMFORT
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICELECTRICHEATERAJUSTTEMP=>[
			self::SET_STANDBY,
			self::SET_BASIC,
			self::SET_EXTERNAL,
			self::SET_INTERNAL,
			self::SET_AUTO,
			self::RESET_HEATINGLEVEL,
			self::SET_FROSTPROTECT,
			self::SET_ECO,
			self::SET_COMFORT2,
			self::SET_COMFORT1,
			self::SET_COMFORT
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATER=>[
			self::SET_AUTOMODE,
			self::SET_MANUECOACTIVE,
			self::SET_MANUECOINACTIVE
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERSPLIT=>[
			self::SET_AUTOMODE,
			self::SET_MANUECOACTIVE,
			self::SET_MANUECOINACTIVE
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERCETHIV4=>[
			self::SET_AUTOMODE,
			self::SET_MANUECOACTIVE,
			self::SET_MANUECOINACTIVE
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHOTWATERFLATC2=>[
			self::SET_AUTOMODE,
			self::SET_MANUECOINACTIVE
		],
		CozyTouchDeviceToDisplay::CTDTD_ATLANTICHEATRECOVERYVENT=>[
			self::SET_VENTMANUAL,
			self::SET_VENTPROG,
			self::SET_VENTAUTO,
			self::SET_VENTBOOST,
			self::SET_VENTHIGH,
			self::SET_VENTREFRESH
			//self::SET_BOOSTDURATION
		]
	];
	const ACTION_LABEL = [
		self::SET_STANDBY=>"StandBy",
		self::SET_BASIC=>"Basic",
		self::SET_EXTERNAL=>"Externe",
		self::SET_INTERNAL=>"Interne",
		self::SET_AUTO=>"Auto",
		self::SET_OFF=>"Off",
		self::RESET_HEATINGLEVEL=>"Reset",
		self::SET_FROSTPROTECT=>"Hors-gel",
		self::SET_ECO=>"Eco",
		self::SET_COMFORT2=>"Confort-2",
		self::SET_COMFORT1=>"Confort-1",
		self::SET_COMFORT=>"Confort",
		self::SET_AUTOMODE=>"Auto",
		self::SET_MANUECOACTIVE=>"Manuel Eco",
		self::SET_MANUECOINACTIVE=>"Manuel",
		self::SET_BOOSTDURATION=>"Boost",
		self::SET_BOOST=>"Boost",
		self::SET_ONOFF=>"Off",

		self::SET_VENTBOOST=>"Boost Maison",
		self::SET_VENTHIGH=>"Boost Cuisine",
		self::SET_VENTREFRESH=>"Rafraichissement",
		self::SET_VENTMANUAL=>"Manual",
		self::SET_VENTPROG=>"Prog",
		self::SET_VENTAUTO=>"Auto"
	];
}

class CozyTouchDeviceActions
{
	// Atlantic chauffage electrique
	const CTPC_ON = "on"; 
	const CTPC_OFF = "off"; 
	
	const CTPC_SETMODE = "setOperatingMode"; // parameters : standby / basic / internal / external / auto
	const CTPC_SETTARGETTEMP = "setTargetTemperature"; //parameters : 18
	const CTPC_SETDEROGTEMP = "setDerogatedTargetTemperature"; //parameters : 18
	const CTPC_SETCOMTEMP = "setComfortTemperature"; //parameters : 18
	const CTPC_SETECOTEMP = "setEcoTemperature"; //parameters : 3,5  // => 18-3,5

	const CTPC_SETHEATINGLVL = "setHeatingLevel"; //parameters : eco, comfort
	const CTPC_CANCELHEATINGLVL = "cancelHeatingLevel"; //parameters : eco, comfort

	const CTPC_RSHMODE = "refreshOperatingMode";
	
	const CTPC_RSHTARGETTEMP = "refreshTargetTemperature";
	const CTPC_RSHDEROGTEMP = "refreshDerogatedTargetTemperature"; //parameters : 18
	const CTPC_RSHCOMTEMP = "refreshComfortTemperature"; //parameters : 18
	const CTPC_RSHECOTEMP = "refreshEcoTemperature"; //parameters : 3,5  // => 18-3,5
	const CTPC_RSHEFFTEMP = "refreshEffectiveTemperatureSetpoint"; //parameters : 3,5  // => 18-3,5
	const CTPC_RSHHEATINGLVL = "refreshHeatingLevel"; //parameters : eco, comfort
	
	// Atlantic ballon d'eau chaude
	const CTPC_RSHWATERCONS = "refreshWaterConsumption";
	const CTPC_RSHAWAYDUR = "refreshAwayModeDuration";
	const CTPC_RSHBOOSTDUR = "refreshBoostModeDuration";
	const CTPC_RSHDHWCAPACITY = "refreshDHWCapacity";
	const CTPC_RSHDHWMODE = "refreshDHWMode";
	const CTPC_SETAWAYDUR = "setAwayModeDuration";
	const CTPC_SETBOOSTDUR = "setBoostModeDuration";
	const CTPC_SETDHWMODE = "setDHWMode";
	const CTPC_SETCURRENTOPEMODE = "setCurrentOperatingMode";
	const CTPC_RSHCURRENTOPEMODE = "refreshCurrentOperatingMode";

	const CTPC_RSHBOOSTSTARTDATE = "refreshBoostStartDate";
	const CTPC_RSHBOOSTENDDATE = "refreshBoostEndDate";
	const CTPC_SETDATETIME = "setDateTime";
	const CTPC_SETBOOSTMODE = "setBoostMode";
	const CTPC_SETEXPECTEDSHOWER='setExpectedNumberOfShower';
	

	// Atlantic VMC
	const CTPC_SETAIRDEMANDMODE = "setAirDemandMode";
	const CTPC_RSHVENTILATION = "refreshVentilationState";
	const CTPC_SETVENTILATIONMODE = "setVentilationMode";

	const CTPC_SETVENTILATIONCONFIGMODE = "setVentilationConfigurationMode"; // standard = manuel, comfort = auto,
	const CTPC_RSHVENTILATIONCONFIGMODE = "refreshVentilationConfigurationMode";

	// Pompe à chaleur
	//      Ballon d'eau chaude
	const CTPC_SETDHWONOFF="setDHWOnOffState";
	const CTPC_SETBOOSTONOFF="setBoostOnOffState";
	//		Heat system
	const CTPC_SETHEATINGONOFF="setHeatingOnOffState";
	const CTPC_SETECOHEATINGTARGET="setEcoHeatingTargetTemperature";
	const CTPC_SETCOMFORTHEATINGTARGET="setComfortHeatingTargetTemperature";
	const CTPC_SETDEROGTIME = "setDerogationTime";
	const CTPC_SETDEROGONOFF = "setDerogationOnOffState";
	const CTPC_RSHDEROGTIME = "refreshDerogationRemainingTime";
}


?>
