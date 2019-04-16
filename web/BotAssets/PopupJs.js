function setStatus(newstatus)
{
    $("#bot").removeClass("speaking thinking listening computing");
    $("#bot").addClass(newstatus);
}