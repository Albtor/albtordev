//CONFIGURATION TO GENERATE A JSON FROM THE VALUES SELECTED IN THE HTML

var cutoff,
  is_wh,
  sms_disable_all,
  sms_pickup,
  sms_delivered,
  sms_delivery_attempt,
  sms_delivered_3rd_party,
  sms_delivery_information,
  mail_absent,
  mail_pickup,
  mail_rejected,
  mail_delivered,
  mail_incorrect_address,
  mail_return_in_progress,
  mail_delivered_3rd_party,
  mail_delivery_information_type,
  mail_delivery_information_timeslots,
  saturday,
  sunday,
  parametric_config,
  is_warehouse_company,
  notification_service,
  show_distance_in_delivery_address,
  custom_timeslots,
  show_service_types,
  can_create_order_with_cod;

var TimeSlots = [],
  ServiceTypes = [],
  TimeslotsNotifications = [];
var textArea = document.getElementById("textarea");

window.onload = function () {
  colorChange();
};

function colorChange() {
  var WH = document.getElementById("WH");
  var lista = document.getElementsByTagName("select");
  for (var i = 0; i <= lista.length; i++) {
    // console.log(lista[i].value);
    if (lista[i].value == undefined) {
      console.log("Bravo");
    }
    if (lista[i].value == "true" && lista[i].id != "WH") {
      lista[i].className = "greenBackground";
      // lista[i].style.backgroundColor = "#cceecc";
    } else if (lista[i].value == "false" && lista[i].id != "WH") {
      // lista[i].style.backgroundColor = "#f5cdcd";
      lista[i].className = "redBackground";
      // lista[i].classList.toggle("redBackground");
    }
  }
}

function getValues(type) {
  // textArea.style.backgroundColor = "black";
  textArea.style.cssText = "color: black";
  var jsonData = getJSON();

  //GENERAL
  cutoff = document.getElementById("cutoff").value;
  is_wh = document.getElementById("WH").value;
  notification_service = document.getElementById("NotificationService").value;
  jsonData.cutoff_time = cutoff;
  jsonData.is_warehouse_company = is_wh;
  jsonData.notification_service = notification_service;

  //SMS
  sms_disable_all = document.getElementById("sms_disable_all").value;
  sms_pickup = document.getElementById("sms_pickup").value;
  sms_delivered = document.getElementById("sms_delivered").value;
  sms_delivery_attempt = document.getElementById("sms_delivery_attempt").value;
  sms_delivered_3rd_party = document.getElementById(
    "sms_delivered_3rd_party"
  ).value;
  sms_delivery_information = document.getElementById(
    "sms_delivery_information"
  ).value;

  jsonData.notifications.sms.disable_all = sms_disable_all;
  jsonData.notifications.sms.pickup = sms_pickup;
  jsonData.notifications.sms.delivered = sms_delivered;
  jsonData.notifications.sms.delivered_3rd_party = sms_delivered_3rd_party;
  jsonData.notifications.sms.delivery_attempt = sms_delivery_attempt;
  jsonData.notifications.sms.delivery_information = sms_delivery_information;

  //EMAIL
  mail_delivery_information_type = document.getElementById(
    "delivery_information_type"
  ).value;
  mail_absent = document.getElementById("email_absent").value;
  mail_pickup = document.getElementById("email_pickup").value;
  mail_rejected = document.getElementById("email_rejected").value;
  mail_delivered = document.getElementById("email_delivered").value;
  mail_incorrect_address = document.getElementById(
    "email_incorrect_address"
  ).value;
  mail_return_in_progress = document.getElementById(
    "email_return_in_progress"
  ).value;
  mail_delivered_3rd_party = document.getElementById(
    "email_delivered_3rd_party"
  ).value;

  jsonData.notifications.email.absent = mail_absent;
  jsonData.notifications.email.pickup = mail_pickup;
  jsonData.notifications.email.rejected = mail_rejected;
  jsonData.notifications.email.delivered = mail_delivered;
  jsonData.notifications.email.incorrect_address = mail_incorrect_address;
  jsonData.notifications.email.return_in_progress = mail_return_in_progress;
  jsonData.notifications.email.delivered_3rd_party = mail_delivered_3rd_party;
  jsonData.notifications.email.delivery_information.type =
    mail_delivery_information_type;

  //WEEKENDS
  saturday = document.getElementById("saturday").value;
  sunday = document.getElementById("sunday").value;
  jsonData.weekend.saturday = saturday;
  jsonData.weekend.sunday = sunday;

  //MANUAL ORDERS
  parametric_config = document.getElementById("parametric_config").value;
  show_distance_in_delivery_address = document.getElementById(
    "show_distance_in_delivery_address"
  ).value;
  can_create_order_with_cod = document.getElementById("cod").value;
  custom_timeslots = document.getElementById("custom_timeslots").value;
  show_service_types = document.getElementById("show_service_types").value;

  jsonData.parametric_config = parametric_config;
  jsonData.show_distance_in_delivery_address =
    show_distance_in_delivery_address;
  jsonData.can_create_order_with_cod = can_create_order_with_cod;
  jsonData.time_slot_config.custom = custom_timeslots;
  jsonData.service_type_config.show = show_service_types;

  //SERVICE TYPES
  ServiceTypes = checkServiceTypesChecked();
  jsonData.service_type_config.types = ServiceTypes;

  //TIMESLOTS MANUAL ORDERS
  TimeSlots = checkTimeSlotsChecked("Manual");
  jsonData.time_slot_config.slots = TimeSlots;

  //TIMESLOTS NOTIFICATIONS
  if (
    mail_delivery_information_type == "dts_on_scan" ||
    mail_delivery_information_type == "dts_on_manifest"
  ) {
    TimeslotsNotifications = checkTimeSlotsChecked("DTS");
    jsonData.notifications.email.delivery_information.timeslots =
      TimeslotsNotifications;
  } else {
    TimeslotsNotifications = [];
    jsonData.notifications.email.delivery_information.timeslots =
      TimeslotsNotifications;
  }

  if (type == 1) {
    generateJson(jsonData);
  } else {
    generateJsonFormatted(jsonData);
  }
}

function generateJson(jsonData) {
  // var verify = checkFields();
  // if (!verify){
  //     alert("Choose ST and Timeslots")
  //     break;}
  var obj = JSON.stringify(jsonData);
  var textArea = document.getElementById("textarea");
  textArea.innerHTML = "";
  textArea.innerHTML = obj;
}

//FUNCTION TO GENERATE THE JSON NICE
function generateJsonFormatted(jsonData) {
  var obj = JSON.stringify(jsonData, null, 2);
  var textArea = document.getElementById("textarea");
  textArea.innerHTML = "";
  textArea.innerHTML = obj;
}

//FUNCTION TO CHECK THE SERVICE TYPES CHECKED
function checkServiceTypesChecked() {
  // var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  var ServiceTypesJson = [];
  var serviceTypes = document.getElementsByClassName("ServiceTypes"); // Selects all checkboxes with the class ServiceTypes
  for (var checkbox of serviceTypes) {
    if (checkbox.checked) {
      //Checks if they are checked and saves the value in the array
      ServiceTypesJson.push(checkbox.value);
    }
  }
  return ServiceTypesJson;
}

//FUNCTION TO CHECK THE TIMESLOTS CHECKED DEPENDING IF IT IS MANUAL OR DTS
function checkTimeSlotsChecked(type) {
  // var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  var TimeslotsJson = [];
  var TimeslotsSpecial = [];
  if (type == "Manual") {
    var TimeslotsPage = document.getElementsByClassName("Timeslots"); //Timeslots for Manual orders
    TimeslotsSpecial = specialTimeslots("Manual");
  } else if (type == "DTS") {
    var TimeslotsPage = document.getElementsByClassName("TimeslotsDTS"); // Timeslots for DTS Notifications
    TimeslotsSpecial = specialTimeslots("DTS");
  }

  //OBTAIN THE NORMAL TIMESLOTS CHECKED
  for (var checkbox2 of TimeslotsPage) {
    if (checkbox2.checked) {
      var Start = checkbox2.value.substring(0, 5); //First Timeslot
      var End = checkbox2.value.substring(6, 12); //Second Timeslot
      var object = {
        end: End,
        start: Start,
      };
      // console.log("Start: "+ Start + " End: "+ End);
      TimeslotsJson.push(object);
    }
  }

  //IF THERE ARE THE 30 MIN TIMESLOTS
  if (TimeslotsSpecial != null) {
    for (var checkbox1 of TimeslotsSpecial) {
      var Start = checkbox1.start;
      var End = checkbox1.end;
      var object = {
        end: End,
        start: Start,
      };
      // console.log("Start: "+ Start + " End: "+ End);
      TimeslotsJson.push(object);
    }
  }

  return TimeslotsJson;
}

//FUNCTION TO TO OBTAIN TIMESLOTS OF 30 MIN
function specialTimeslots(type) {
  var TimeslotsSpecial = [];
  var Timeslots30Min;
  if (type == "Manual") {
    Timeslots30Min = document.getElementById("TS_45");
  } else if (type == "DTS") {
    Timeslots30Min = document.getElementById("DTS_45");
  }

  if (Timeslots30Min.checked) {
    console.log("checked");
    TimeslotsSpecial = timeSlots30Min();
  }

  return TimeslotsSpecial;
}

function checkTypeNotification(evt) {
  if (
    evt.target.value === "dti_on_scan" ||
    evt.target.value === "dti_on_manifest"
  ) {
    // document.getElementById("DTS_Selection").style.display = "none"; //To make the button dissapear
    document.getElementById("TimeslotsDTS").style.visibility = "hidden"; //To hide the div of timeslots
    document.getElementById("buttonTimeslots").disabled = true; // To make the button disabled
    c = 0;
  } else {
    document.getElementById("DTS_Selection").style.display = "inherit";
    document.getElementById("buttonTimeslots").disabled = false;
  }
}

//TEMPLATE FOR THE JSON FOR CONFIGURATION
function getJSON() {
  var jsonData = {
    cutoff_time: "00:00", //DONE
    notifications: {
      sms: {
        //DONE
        pickup: false,
        delivered: true,
        disable_all: false,
        delivery_attempt: false,
        delivered_3rd_party: true,
        delivery_information: true,
      },
      email: {
        absent: true,
        pickup: false,
        rejected: true,
        delivered: true,
        incorrect_address: true,
        return_in_progress: true,
        delivered_3rd_party: true,
        delivery_information: {
          type: "dts_on_scan",
          timeslots: [],
        },
      },
    },
    weekend: {
      //DONE
      sunday: true,
      saturday: true,
    },
    time_slot_config: {
      slots: [
        {
          end: "14:00",
          start: "10:00",
        },
        {
          end: "18:00",
          start: "14:00",
        },
        {
          end: "22:00",
          start: "18:00",
        },
      ],
      custom: true,
    },
    parametric_config: true,
    service_type_config: {
      show: true,
      types: ["NT4", "SF4"],
    },
    is_warehouse_company: true,
    notification_service: true,
    show_distance_in_delivery_address: true,
    can_create_order_with_cod: true,
  };
  return jsonData;
}

//WHEN CLICKING ON GENERATE JSON BUT JUST HOLDING THE CLICK, NO RELEASE
function clearTextArea() {
  var textArea = document.getElementById("textarea");
  textArea.style.cssText = "color: #EC9929";
}

//TO COPY THE JSON FROM THE TEXT
function copyJSON() {
  document.querySelector("textarea").select();
  document.execCommand("copy");
}

// -----------------
//TO HIDE AND SHOW THE SERVICE TYPES AND THE TIMESLOTS FOR MANUAL AND NOTIFICATIONS
var a;
function showHideTS() {
  if (a != 1) {
    document.getElementById("Timeslots").style.visibility = "visible";
    document.getElementById("ServiceTypes").style.visibility = "hidden";
    document.getElementById("TimeslotsDTS").style.visibility = "hidden";
    a = 1;
    b = 0;
    c = 0;
  } else {
    document.getElementById("Timeslots").style.visibility = "hidden";
    a = 0;
  }
}
var c;
function showHideDTS() {
  if (c != 1) {
    document.getElementById("TimeslotsDTS").style.visibility = "visible";
    document.getElementById("ServiceTypes").style.visibility = "hidden";
    document.getElementById("Timeslots").style.visibility = "hidden";
    c = 1;
    b = 0;
    a = 0;
  } else {
    document.getElementById("TimeslotsDTS").style.visibility = "hidden";
    c = 0;
  }
}

var b;
function showHideST() {
  if (b != 1) {
    document.getElementById("ServiceTypes").style.visibility = "visible";
    document.getElementById("Timeslots").style.visibility = "hidden";
    document.getElementById("TimeslotsDTS").style.visibility = "hidden";
    b = 1;
    a = 0;
    c = 0;
  } else {
    document.getElementById("ServiceTypes").style.visibility = "hidden";
    b = 0;
  }
}

/// GET MODELS. THIS METHODS IS TO LOAD THE GENERAL OPTIONS OF WH, SFS, WH with Manual and SFS with Manual
function fillModel() {
  //   console.log(document.getElementById("templates_json").value);
  //var is_wh = (document.getElementById("WH").value = false);
  var jsonDataModel = {};
  var Template = document.getElementById("templates_json").value;
  switch (Template) {
    case "custom":
      jsonDataModel = getModel_WH();
      break;
    case "WH":
      jsonDataModel = getModel_WH();
      break;
    case "WH_Manual":
      jsonDataModel = getModel_WH_Manual();
      break;
    case "SFS":
      jsonDataModel = getModel_SFS();
      break;
    case "SFS_Manual":
      jsonDataModel = getModel_SFS_Manual();
      break;
    default:
    // code block
  }

  setTemplateValues(jsonDataModel);

  //To avoid having the button for dts always disabled, we trigger an event for the site to check the new value.
  //https://thewebdev.info/2021/05/02/how-to-programmatically-trigger-a-change-event-on-an-input-with-javascript/
  const event = new Event("change");
  document.getElementById("delivery_information_type").dispatchEvent(event);
  // is_wh = jsonData.is_warehouse_company;
}

//WITH THIS METHOD WE SET THE VALUES FROM THE JSON TO THE SELECTS IN THE PAGE
function setTemplateValues(jsonDataTemplate) {
  document.getElementById("cutoff").value = jsonDataTemplate.cutoff_time;
  document.getElementById("WH").value = jsonDataTemplate.is_warehouse_company;
  document.getElementById("NotificationService").value =
    jsonDataTemplate.notification_service;

  document.getElementById("sms_disable_all").value =
    jsonDataTemplate.notifications.sms.disable_all;
  document.getElementById("sms_pickup").value =
    jsonDataTemplate.notifications.sms.pickup;
  document.getElementById("sms_delivered").value =
    jsonDataTemplate.notifications.sms.delivered;
  document.getElementById("sms_delivered_3rd_party").value =
    jsonDataTemplate.notifications.sms.delivered_3rd_party;
  document.getElementById("sms_delivery_attempt").value =
    jsonDataTemplate.notifications.sms.delivery_attempt;
  document.getElementById("sms_delivery_information").value =
    jsonDataTemplate.notifications.sms.delivery_information;

  document.getElementById("email_absent").value =
    jsonDataTemplate.notifications.email.absent;
  document.getElementById("email_pickup").value =
    jsonDataTemplate.notifications.email.pickup;
  document.getElementById("email_rejected").value =
    jsonDataTemplate.notifications.email.rejected;
  document.getElementById("email_delivered").value =
    jsonDataTemplate.notifications.email.delivered;
  document.getElementById("email_incorrect_address").value =
    jsonDataTemplate.notifications.email.incorrect_address;
  document.getElementById("email_return_in_progress").value =
    jsonDataTemplate.notifications.email.return_in_progress;
  document.getElementById("email_delivered_3rd_party").value =
    jsonDataTemplate.notifications.email.delivered_3rd_party;
  document.getElementById("delivery_information_type").value =
    jsonDataTemplate.notifications.email.delivery_information.type;

  document.getElementById("saturday").value = jsonDataTemplate.weekend.saturday;
  document.getElementById("sunday").value = jsonDataTemplate.weekend.sunday;

  document.getElementById("parametric_config").value =
    jsonDataTemplate.parametric_config;
  document.getElementById("show_distance_in_delivery_address").value =
    jsonDataTemplate.show_distance_in_delivery_address;
  document.getElementById("cod").value =
    jsonDataTemplate.can_create_order_with_cod;
  document.getElementById("custom_timeslots").value =
    jsonDataTemplate.time_slot_config.custom;
  document.getElementById("show_service_types").value =
    jsonDataTemplate.service_type_config.show;
  //   document.getElementById("").value = jsonDataTemplate.time_slot_config.slots;
  //   document.getElementById("").value =
  //     jsonDataTemplate.notifications.email.delivery_information.timeslots;
}

//DIFFERENT JSON TEMPLATES TO LOAD AS DEFAULT: WH, WH + MANUAL, SFS, SFS + MANUAL

function getModel_WH() {
  var jsonDataModel = {
    cutoff_time: "00:00",
    notifications: {
      sms: {
        pickup: "false",
        delivered: "false",
        disable_all: "false",
        delivery_attempt: "true",
        delivered_3rd_party: "true",
        delivery_information: "true",
      },
      email: {
        absent: "true",
        pickup: "true",
        rejected: "true",
        delivered: "true",
        incorrect_address: "true",
        return_in_progress: "true",
        delivered_3rd_party: "true",
        delivery_information: {
          type: "dts_on_scan",
          timeslots: [],
        },
      },
    },
    weekend: {
      sunday: "false",
      saturday: "true",
    },
    time_slot_config: {
      slots: [],
      custom: "false",
    },
    parametric_config: "false",
    service_type_config: {
      show: "false",
      types: [],
    },
    is_warehouse_company: "true",
    notification_service: "false",
    show_distance_in_delivery_address: "false",
    can_create_order_with_cod: "false",
  };
  return jsonDataModel;
}

function getModel_WH_Manual() {
  var jsonDataModel = {
    cutoff_time: "00:00",
    notifications: {
      sms: {
        pickup: "false",
        delivered: "false",
        disable_all: "false",
        delivery_attempt: "true",
        delivered_3rd_party: "true",
        delivery_information: "true",
      },
      email: {
        absent: "true",
        pickup: "true",
        rejected: "true",
        delivered: "true",
        incorrect_address: "true",
        return_in_progress: "true",
        delivered_3rd_party: "true",
        delivery_information: {
          type: "dts_on_scan",
          timeslots: [],
        },
      },
    },
    weekend: {
      sunday: "false",
      saturday: "true",
    },
    time_slot_config: {
      slots: [],
      custom: "false",
    },
    parametric_config: "true",
    service_type_config: {
      show: "false",
      types: [],
    },
    is_warehouse_company: "true",
    notification_service: "false",
    show_distance_in_delivery_address: "true",
    can_create_order_with_cod: "false",
  };
  return jsonDataModel;
}

function getModel_SFS() {
  var jsonDataModel = {
    cutoff_time: "00:00",
    notifications: {
      sms: {
        pickup: "false",
        delivered: "false",
        disable_all: "false",
        delivery_attempt: "false",
        delivered_3rd_party: "true",
        delivery_information: "true",
      },
      email: {
        absent: "false",
        pickup: "true",
        rejected: "false",
        delivered: "true",
        incorrect_address: "false",
        return_in_progress: "false",
        delivered_3rd_party: "false",
        delivery_information: {
          type: "dti_on_manifest",
          timeslots: [],
        },
      },
    },
    weekend: {
      sunday: "false",
      saturday: "true",
    },
    time_slot_config: {
      slots: [],
      custom: "false",
    },
    parametric_config: "false",
    service_type_config: {
      show: "false",
      types: [],
    },
    is_warehouse_company: "false",
    notification_service: "false",
    show_distance_in_delivery_address: "false",
    can_create_order_with_cod: "false",
  };
  return jsonDataModel;
}

function getModel_SFS_Manual() {
  var jsonDataModel = {
    cutoff_time: "00:00",
    notifications: {
      sms: {
        pickup: "false",
        delivered: "false",
        disable_all: "false",
        delivery_attempt: "false",
        delivered_3rd_party: "true",
        delivery_information: "true",
      },
      email: {
        absent: "false",
        pickup: "true",
        rejected: "false",
        delivered: "true",
        incorrect_address: "false",
        return_in_progress: "false",
        delivered_3rd_party: "false",
        delivery_information: {
          type: "dti_on_manifest",
          timeslots: [],
        },
      },
    },
    weekend: {
      sunday: "false",
      saturday: "true",
    },
    time_slot_config: {
      slots: [],
      custom: "false",
    },
    parametric_config: "true",
    service_type_config: {
      show: "false",
      types: [],
    },
    is_warehouse_company: "false",
    notification_service: "false",
    show_distance_in_delivery_address: "true",
    can_create_order_with_cod: "false",
  };
  return jsonDataModel;
}

//FUNCION QUE DEVUELVE TIMESLOTS DE 30 MIN
function timeSlots30Min() {
  var timeslots30Min = [
    {
      start: "10:00",
      end: "10:30",
    },
    {
      start: "10:30",
      end: "11:00",
    },
    {
      start: "11:00",
      end: "11:30",
    },
    {
      start: "11:30",
      end: "12:00",
    },
    {
      start: "12:00",
      end: "12:30",
    },
    {
      start: "12:30",
      end: "13:00",
    },
    {
      start: "13:00",
      end: "13:30",
    },
    {
      start: "13:30",
      end: "14:00",
    },
    {
      start: "14:00",
      end: "14:30",
    },
    {
      start: "14:30",
      end: "15:00",
    },
    {
      start: "15:00",
      end: "15:30",
    },
    {
      start: "15:30",
      end: "16:00",
    },
    {
      start: "16:00",
      end: "16:30",
    },
    {
      start: "16:30",
      end: "17:00",
    },
    {
      start: "17:00",
      start: "17:30",
    },
    {
      start: "17:30",
      end: "18:00",
    },
    {
      start: "18:00",
      end: "18:30",
    },
    {
      start: "18:30",
      end: "19:00",
    },
    {
      start: "19:00",
      end: "19:30",
    },
    {
      start: "19:30",
      end: "20:00",
    },
    {
      start: "20:00",
      end: "20:30",
    },
    {
      start: "20:30",
      end: "21:00",
    },
    {
      start: "21:00",
      end: "21:30",
    },
    {
      start: "21:30",
      end: "22:00",
    },
  ];

  return timeslots30Min;
}
