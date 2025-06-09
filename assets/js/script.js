// -----------------------DomOfFullPopupBodyStart----------------------------
const bookingPopup = document.getElementById("bookingPopup");
const closePopup = document.getElementById('closePopup');
// -----------------------DomOfFullPopupBodyEnd----------------------------
// -----------------------DomOfHeaderStart-----------------------------
const header = document.getElementById("header");
const stepOne = document.getElementById("stepOne");
const stepTwo = document.getElementById("stepTwo");
const stepThree = document.getElementById("stepThree");
const stepFour = document.getElementById("stepFour");
const planTypeName = document.getElementById("planTypeName");
const people = document.getElementById("people");
const startDate = document.getElementById("startDate");
const duration = document.getElementById("duration");
const monthlyCost = document.getElementById("monthlyCost");
// -----------------------DomOfHeaderEnd-----------------------------

// -------------------------------DomOfWorkSpaceStart-----------------------------
const privateOfficePopup = document.getElementById("privateOfficePopup");
const teamOfficeSuitePopup = document.getElementById("teamOfficeSuitePopup");
const hybridOfficePopup = document.getElementById("hybridOfficePopup");
const dayOfficePopup = document.getElementById("dayOfficePopup");
const dedicatedDeskPopup = document.getElementById("dedicatedDeskPopup");
const dayPassPopup = document.getElementById("dayPassPopup");
const flexibleDeskPopup = document.getElementById("flexibleDeskPopup");
const virtualOfficePopup = document.getElementById("virtualOfficePopup");
const conferenceRoomPopup = document.getElementById("conferenceRoomPopup");
const eventSpacePopup = document.getElementById("eventSpacePopup");
const podcastStudioPopup = document.getElementById("podcastStudioPopup");
const zoomCallRoomPopup = document.getElementById("zoomCallRoomPopup");
const colorBurstRoomPopup = document.getElementById("colorBurstRoomPopup");
const alapRoomPopup = document.getElementById("alapRoomPopup");
const alochonaRoomPopup = document.getElementById("alochonaRoomPopup");
// -------------------------------DomOfPlanElement-----------------------------
const privateOffice = document.getElementById("privateOffice");
const teamOfficeSuite = document.getElementById("teamOfficeSuite");
const hybridOffice = document.getElementById("hybridOffice");
const dayOffice = document.getElementById("dayOffice");
const dedicatedDesk = document.getElementById("dedicatedDesk");
const dayPass = document.getElementById("dayPass");
const flexibleDesk = document.getElementById("flexibleDesk");
const virtualOffice = document.getElementById("virtualOffice");
const conferenceRoom = document.getElementById("conferenceRoom");
const eventSpace = document.getElementById("eventSpace");
const podcastStudio = document.getElementById("podcastStudio");
const zoomCallRoom = document.getElementById("zoomCallRoom");
const colorBurstRoom = document.getElementById("colorBurstRoom");
const alapRoom = document.getElementById("alapRoom");
const alochonaRoom = document.getElementById("alochonaRoom");
// ---------------------------DomOfchosenPlan------------------------
let allRadioInputs = document.querySelectorAll('input[name="chosen_plan"]');
// -------------------------------DomOfWorkSpaceEnd-----------------------------

// -------------------------------DomOfChosenPlanOverviewStart------------------
const chosenPlanOverview = document.getElementById('chosenPlanOverview');
const selectedOfficeOrRoomType = document.getElementById('selectedOfficeOrRoomType');
const selectedPlanDuration = document.getElementById('selectedPlanDuration');
const selectedPlanOverview = document.getElementById('selectedPlanOverview');

// -------------------------------DomOfNumberOfPeople-----------------------------
const noOfPeople = document.getElementById('noOfPeople');
const zero = document.getElementById('zero');
const increment = document.getElementById('increment');
const decrement = document.getElementById('decrement');
// -------------------------------DomOfDate-----------------------------
const date = document.getElementById('date');
// -------------------------------DomOfChosenPlanOverviewBoxNBackNContinueBtn-------
const chosenPlanBackBtn = document.getElementById('chosenPlanBackBtn');
const chosenPlanContinueBtn = document.getElementById('chosenPlanContinueBtn');
// -------------------------------DomOfChosenPlanOverviewEnd------------------

// ----------------------------DomOfPersonalDetailsStart-----------------------------
const personalDetails = document.getElementById('personalDetails');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const country = document.getElementById('country');
const companyName = document.getElementById('companyName');
const address = document.getElementById('address');
const apartment = document.getElementById('apartment');
const cityTown = document.getElementById('cityTown');
const postcode = document.getElementById('postcode');
const termsAndConditions = document.getElementById('termsAndConditions');
const personalDetailsBackBtn = document.getElementById('personalDetailsBackBtn');
const personalDetailsContinueBtn = document.getElementById('personalDetailsContinueBtn');
// ----------------------------DomOfPersonalDetailsEnd-----------------------------

// ----------------------------ReviewPaymentDetailsStart-----------------------------
const reviewPaymentDetails = document.getElementById('reviewPaymentDetails');
const reviewSubTotal = document.getElementById('reviewSubTotal');
const reviewTaxVat = document.getElementById('reviewTaxVat');
const reviewTotal = document.getElementById('reviewTotal');
const reviewSubsequentSubTotal = document.getElementById('reviewSubsequentSubTotal');
const reviewSubsequentTaxVat = document.getElementById('reviewSubsequentTaxVat');
const reviewSubsequentTotal = document.getElementById('reviewSubsequentTotal');

// ----------------------------DomOfPaymentMethodsStart----------
const paymentRadioInput = document.getElementById('paymentRadioInput');
const payNow = document.getElementById('payNow');
const payOnArrival = document.getElementById('payOnArrival');
// ----------------------------DomOfPaymentMethodsEnd----------
const reviewPaymentDetailsBackBtn = document.getElementById('reviewPaymentDetailsBackBtn');
const submit = document.getElementById('submit');
// ----------------------------DomOfReviewPaymentDetailsEnd-----------------------------

// ----------------------------DomOfFormSubmitBtnEnd-----------------------------

// ----------------------------DomOfBookingSummaryStart--------------------------
const bookingSummary = document.getElementById('bookingSummary');
const bookerMemberName = document.getElementById('bookerMemberName');
const bookingEmail = document.getElementById('bookingEmail');
const summaryBookingId = document.getElementById('summaryBookingId');
const contactEmail = document.getElementById('contactEmail');
const contactNumber = document.getElementById('contactNumber');
const summaryBookedPlan = document.getElementById('summaryBookedPlan');
const summaryBookedForPeople = document.getElementById('summaryBookedForPeople');
const summaryBookingDate = document.getElementById('summaryBookingDate');
const summaryBookedForTime = document.getElementById('summaryBookedForTime');
const bookerName = document.getElementById('bookerName');
const paymentType = document.getElementById('paymentType');
const cardNumber = document.getElementById('cardNumber');
// ----------------------------DomOfBookingSummaryEnd----------------------------

// ----------------------------hiddenDomInputElementStart----------------------------
const bookedPlan = document.getElementById('bookedPlan');
const bookedForPeople = document.getElementById('bookedForPeople');
const bookingDate = document.getElementById('bookingDate');
const bookingId = document.getElementById('bookingId');
const subTotal = document.getElementById('subTotal');
const taxVat = document.getElementById('taxVat');
const total = document.getElementById('total');
// ----------------------------hiddenDomInputElementEnd----------------------------

// ----------------------commonFunctionsForElementAddClassNRemove--------------------------------
const addNRemoveClass = (element, addClass, removeClass) => {
    if (!element) {
        return null;
    }
    element.classList.add(addClass);
    element.classList.remove(removeClass);
};


const elementInnerHTML = (element, innerContents) => {
    if (!element) {
        return null;
    }
    element.innerHTML = innerContents;
};

const elementValue = (element, thisValue) => {
    if (!element) {
        return null;
    }
    element.value = thisValue;
};


let clickedPlan;
const clickedChosenPlan = (chosenPlan, chosenPlanTitle) => {
    // Hide both Popups initially
    // ------FullPopupBody-------------
    addNRemoveClass(openPopup, "view", null);
    addNRemoveClass(bookingPopup, null, "view-none");
    addNRemoveClass(chosenPlanOverview, "view-none", "view");
    addNRemoveClass(personalDetails, "view-none", "view");
    addNRemoveClass(reviewPaymentDetails, "view-none", "view");
    addNRemoveClass(bookingSummary, "view-none", "view");
    addNRemoveClass(header, "view", "view-none");
    addNRemoveClass(stepOne, null, "active");
    addNRemoveClass(stepTwo, null, "active");
    addNRemoveClass(stepThree, null, "active");
    addNRemoveClass(stepFour, null, "active");
    addNRemoveClass(stepOne, null, "completed");
    addNRemoveClass(stepTwo, null, "completed");
    addNRemoveClass(stepThree, null, "completed");
    addNRemoveClass(stepFour, null, "completed");
    addNRemoveClass(chosenPlan, "view", "view-none");
    addNRemoveClass(stepOne, "active", null);
    elementInnerHTML(planTypeName, chosenPlanTitle);
    elementInnerHTML(summaryBookedPlan, chosenPlanTitle);
    elementValue(bookedPlan, chosenPlanTitle);
    clickedPlan = chosenPlan;
    elementInnerHTML(people, 0);
    elementInnerHTML(noOfPeople, 0);
    elementInnerHTML(startDate, "");
    elementInnerHTML(duration, "");
    elementInnerHTML(monthlyCost, 0);
}
// ----------------------commonFunctionsForElementInnerHTML--------------------------------
// ---------------ShowingPopup--------------------------------
if(privateOffice){
    privateOffice.onclick = () => {
    clickedChosenPlan(privateOfficePopup, "Private Office");
}
}
if(teamOfficeSuite){
    teamOfficeSuite.onclick = () => {
    clickedChosenPlan(teamOfficeSuitePopup, "Team Office Suite");
}
}
if(hybridOffice){
    hybridOffice.onclick = () => {
    clickedChosenPlan(hybridOfficePopup, "Hybrid Office");
}
}
if(dayOffice){
    dayOffice.onclick = () => {
    clickedChosenPlan(dayOfficePopup, "Day Office");
}
}
if(dedicatedDesk){
    dedicatedDesk.onclick = () => {
    clickedChosenPlan(dedicatedDeskPopup, "Dedicated Desk");
}
}
if(dayPass){
    dayPass.onclick = () => {
    clickedChosenPlan(dayPassPopup, "Day Pass");
}
}
if(flexibleDesk){
    flexibleDesk.onclick = () => {
    clickedChosenPlan(flexibleDeskPopup, "Flexible Desk");
}
}
if(virtualOffice){
    virtualOffice.onclick = () => {
    clickedChosenPlan(virtualOfficePopup, "Virtual Office");
}
}
if(conferenceRoom){
    conferenceRoom.onclick = () => {
    clickedChosenPlan(conferenceRoomPopup, "Conference Room");
}
}
if(eventSpace){
    eventSpace.onclick = () => {
    clickedChosenPlan(eventSpacePopup, "Event Space");
}
}
if(podcastStudio){
    podcastStudio.onclick = () => {
    clickedChosenPlan(podcastStudioPopup, "Podcast Studio");
}
}
if(zoomCallRoom){
    zoomCallRoom.onclick = () => {
    clickedChosenPlan(zoomCallRoomPopup, "Zoom Call Room");
}
}
if(colorBurstRoom){
    colorBurstRoom.onclick = () => {
    clickedChosenPlan(colorBurstRoomPopup, "Color Burst Room");
}
}
if(alapRoom){
    alapRoom.onclick = () => {
    clickedChosenPlan(alapRoomPopup, "Alap Room");
}
}
if(alochonaRoom){
    alochonaRoom.onclick = () => {
    clickedChosenPlan(alochonaRoomPopup, "Alochona Room");
}
}

// ---------------functionOfClosePopup--------------------------------
if (date) {
    date.addEventListener('change', () => {
        elementInnerHTML(startDate, date.value);
        elementInnerHTML(summaryBookingDate, date.value);
        elementValue(bookingDate, date.value);
    });
};
if (closePopup) {
    closePopup.onclick = () => {
        addNRemoveClass(stepOne, null, "active");
        addNRemoveClass(stepTwo, null, "active");
        addNRemoveClass(stepOne, null, "completed");
        addNRemoveClass(stepTwo, null, "completed");
        addNRemoveClass(clickedPlan, "view-none", "view");
        payNow.checked = false;
        payOnArrival.checked = false;
        addNRemoveClass(paymentRadioInput, "view-none", null);
        addNRemoveClass(bookingPopup, "view-none", "view");
        addNRemoveClass(openPopup, null, "view");
        if (checkedRadioInput?.checked === true) {
            checkedRadioInput.checked = false;
        }

    };
};
// ------------------GoToNextChosenPlanOverviewAfterPlanSelectionStart------------------------
let checkedRadioInput;
let checkedRadioValue = null;
allRadioInputs.forEach(function (radio) {
    radio.addEventListener("change", function () {
        checkedRadioInput = this;
        checkedRadioValue = Number(this.value);
        let percentageOfTaxVat = Math.floor(checkedRadioValue / 100 * 15);
        let totalValue = checkedRadioValue + percentageOfTaxVat;
        elementInnerHTML(monthlyCost, checkedRadioValue);
        elementInnerHTML(reviewSubTotal, checkedRadioValue);
        elementInnerHTML(reviewTaxVat, percentageOfTaxVat);
        elementInnerHTML(reviewTotal, totalValue);
        elementInnerHTML(reviewSubsequentSubTotal, checkedRadioValue);
        elementInnerHTML(reviewSubsequentTaxVat, percentageOfTaxVat);
        elementInnerHTML(reviewSubsequentTotal, totalValue);
        elementValue(subTotal, checkedRadioValue);
        elementValue(taxVat, percentageOfTaxVat);
        elementValue(total, totalValue);
        var label = document.querySelector('label[for=' + this.id + ']');
        var labelText = label.innerHTML;
        elementInnerHTML(duration, labelText);
        elementInnerHTML(selectedPlanDuration, labelText);
        addNRemoveClass(this.closest(".office"), "view-none", "view");
        addNRemoveClass(chosenPlanOverview, "view", "view-none");
        addNRemoveClass(stepTwo, "active", null);
        addNRemoveClass(stepOne, "completed", null);
        elementInnerHTML(people, 1);
        elementInnerHTML(noOfPeople, 1);
        elementInnerHTML(summaryBookedForPeople, 1);
        elementValue(bookedForPeople, 1);
        // Get the current date
        const today = new Date();
        // Format the date to YYYY-MM-DD for the date input
        const formattedDate = today.toISOString().split('T')[0];
        // Set the value of the input field to the current date
        date.value = formattedDate;
        elementInnerHTML(startDate, formattedDate);
        elementInnerHTML(summaryBookingDate, formattedDate);
        elementValue(bookingDate, formattedDate);
        chosenPlanBackBtn.onclick = () => {
            addNRemoveClass(stepOne, "active", "completed");
            addNRemoveClass(stepTwo, null, "active");
            addNRemoveClass(chosenPlanOverview, "view-none", "view");
            addNRemoveClass(this.closest(".office"), "view", "view-none");
        };
    });
});
// ------------------GoToNextChosenPlanOverviewAfterPlanSelectionEnd------------------------
// ------------------ChosenPlanOverviewStart------------------------
if (increment) {
    increment.onclick = () => {
        let noOfPeopleParseInt = parseInt(noOfPeople.innerHTML);
        noOfPeopleParseInt++;
        if (noOfPeopleParseInt > 9) {
            addNRemoveClass(zero, "view-none", null);
        }
        elementInnerHTML(noOfPeople, noOfPeopleParseInt);
        elementInnerHTML(people, noOfPeople.innerHTML);
        const singlePersonCost = checkedRadioValue;
        let totalMonthlyCost = singlePersonCost * noOfPeopleParseInt;
        elementInnerHTML(monthlyCost, totalMonthlyCost);
        let percentageOfTaxVat = Math.floor(totalMonthlyCost / 100 * 15);
        let totalValue = totalMonthlyCost + percentageOfTaxVat;
        elementInnerHTML(reviewSubTotal, totalMonthlyCost);
        elementInnerHTML(reviewTaxVat, percentageOfTaxVat);
        elementInnerHTML(reviewTotal, totalValue);
        elementInnerHTML(reviewSubsequentSubTotal, totalMonthlyCost);
        elementInnerHTML(reviewSubsequentTaxVat, percentageOfTaxVat);
        elementInnerHTML(reviewSubsequentTotal, totalValue);
        elementValue(subTotal, totalMonthlyCost);
        elementValue(taxVat, percentageOfTaxVat);
        elementValue(total, totalValue);
        elementInnerHTML(summaryBookedForPeople, noOfPeople.innerHTML);
        elementValue(bookedForPeople, noOfPeople.innerHTML);
    };
} else {
    null;
}

if (decrement) {
    decrement.onclick = () => {
        let noOfPeopleParseInt = parseInt(noOfPeople.innerHTML);
        const singlePersonCost = checkedRadioValue;
        let totalMonthlyCost = null;
        noOfPeopleParseInt--;
        if (noOfPeopleParseInt < 10) {
            addNRemoveClass(zero, null, "view-none");
        }
        if (noOfPeopleParseInt < 1) {
            elementInnerHTML(noOfPeople, 1);
            elementInnerHTML(monthlyCost, checkedRadioValue);
        }
        else {
            elementInnerHTML(noOfPeople, noOfPeopleParseInt);
            totalMonthlyCost = singlePersonCost * noOfPeopleParseInt;
            elementInnerHTML(monthlyCost, totalMonthlyCost);
            let percentageOfTaxVat = Math.floor(totalMonthlyCost / 100 * 15);
            let totalValue = totalMonthlyCost + percentageOfTaxVat;
            elementInnerHTML(reviewSubTotal, totalMonthlyCost);
            elementInnerHTML(reviewTaxVat, percentageOfTaxVat);
            elementInnerHTML(reviewTotal, totalValue);
            elementInnerHTML(reviewSubsequentSubTotal, totalMonthlyCost);
            elementInnerHTML(reviewSubsequentTaxVat, percentageOfTaxVat);
            elementInnerHTML(reviewSubsequentTotal, totalValue);
            elementValue(subTotal, totalMonthlyCost);
            elementValue(taxVat, percentageOfTaxVat);
            elementValue(total, totalValue);
        }
        elementInnerHTML(people, noOfPeople.innerHTML);
        elementInnerHTML(summaryBookedForPeople, noOfPeople.innerHTML);
        elementValue(bookedForPeople, noOfPeople.innerHTML);
    };
}
// else {
//     console.error("Element with ID 'increment' not found.");
// }

// elementInnerHTML(bookedForPeople, noOfPeople.innerHTML);
if (chosenPlanContinueBtn) {
    chosenPlanContinueBtn.onclick = () => {
        addNRemoveClass(chosenPlanOverview, "view-none", "view");
        addNRemoveClass(personalDetails, "view", "view-none");
        addNRemoveClass(stepThree, "active", null);
        addNRemoveClass(stepTwo, "completed", "active");
    };
}

// ------------------ChosenPlanOverviewEnd------------------------
// ------------------PersonalDetailsStart-------------------------
if (personalDetailsBackBtn) {
    personalDetailsBackBtn.onclick = () => {
        addNRemoveClass(stepTwo, "active", "completed");
        addNRemoveClass(stepThree, null, "active");
        addNRemoveClass(personalDetails, "view-none", "view");
        addNRemoveClass(chosenPlanOverview, "view", "view-none");
    };
}

// Email validation function
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
}

// Phone validation function (Bangladesh-specific format +880)
function validatePhone(phone) {
    const re = /^\+880\d{9,10}$/;
    return re.test(String(phone));
}
if (personalDetailsContinueBtn) {
    personalDetailsContinueBtn.onclick = (e) => {

        const inputs = [firstName, lastName, email, phone, country, companyName, address, apartment, cityTown, postcode];
        let isValid = true;
        let errorMessage = '';

        inputs.forEach(input => {
            const value = input.value.trim();

            // Check if field is empty
            if (value === '') {
                isValid = false;
                errorMessage += `${input.placeholder} is required.\n`;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = '';
            }

            // Additional validation for specific fields
            if (input.type === 'email' && !validateEmail(value)) {
                isValid = false;
                errorMessage += 'Please enter a valid email address.\n';
                input.style.borderColor = 'red';
            }

            if (input.type === 'tel' && !validatePhone(value)) {
                isValid = false;
                errorMessage += 'Please enter a valid phone number (e.g., +880...).\n';
                input.style.borderColor = 'red';
            }

        });

        if (termsAndConditions.checked !== true) {
            isValid = false;
            errorMessage += 'Please accept the Terms and Conditions.\n';
            termsAndConditions.style.borderColor = 'red';
        }
        if (!isValid) {
            e.preventDefault();
            alert(errorMessage);
        }
        else {
            let memberName = firstName.value + " " + lastName.value;
            elementInnerHTML(bookerMemberName, memberName);
            elementInnerHTML(bookingEmail, email.value);
            elementInnerHTML(contactEmail, email.value);
            elementInnerHTML(contactNumber, phone.value);
            elementInnerHTML(bookerName, memberName);
            addNRemoveClass(personalDetails, "view-none", "view");
            addNRemoveClass(reviewPaymentDetails, "view", "view-none");
            addNRemoveClass(stepFour, "active", "completed");
            addNRemoveClass(stepThree, "completed", "active");
        }

    };
};
// ------------------PersonalDetailsEnd---------------------------
// ---------------------ReviewPaymentDetailsStart-----------------

if (reviewPaymentDetailsBackBtn) {
    reviewPaymentDetailsBackBtn.onclick = () => {
        addNRemoveClass(reviewPaymentDetails, "view-none", "view");
        addNRemoveClass(personalDetails, "view", "view-none");
        addNRemoveClass(stepThree, "active", "completed");
        addNRemoveClass(stepFour, null, "active");
    };
};
if (submit) {
    submit.onclick = () => {
        if (payNow.checked !== true && payOnArrival.checked !== true) {
            addNRemoveClass(paymentRadioInput, "view", "view-none");
            setTimeout(function () {
                addNRemoveClass(paymentRadioInput, "view-none", "view");
            }, 3000);
        }
        else {
            addNRemoveClass(paymentRadioInput, "view-none", null);
            addNRemoveClass(reviewPaymentDetails, "view-none", "view");
            addNRemoveClass(header, "view-none", "view");
            addNRemoveClass(bookingSummary, "view", "view-none");
            };
    };
};
// ---------------------ReviewPaymentDetailsEnd---------------------

// ---------------------BookingSummaryStart-------------------

                    // Create popup
        const popup = document.createElement('div');
        popup.classList.add('popup');
        popup.innerHTML = '<h3>Please Wait for getting<br>your booking id</h3>';

        // Add popup to the body

        // Add style to popup
        popup.style.position = 'fixed';
        popup.style.textAlign = 'center';
        popup.style.top = '50%';
        popup.style.left = '50%';
        popup.style.transform = 'translate(-50%, -50%)';
        popup.style.padding = '50px';
        popup.style.backgroundColor = '#fff';
        popup.style.zIndex = '9999999';
        popup.style.border = '2px solid #000';
        popup.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
        
        bookingSummary.appendChild(popup);

// ---------------------BookingSummaryEnd---------------------