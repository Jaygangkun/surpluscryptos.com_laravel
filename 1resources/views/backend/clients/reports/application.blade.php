<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .app-body {
        font-family: 'Inter', sans-serif;
        background-color: purple;
    }

    .top-heading {
        padding-top: 10px;
        display: flex;
        width: 92%;
        margin: 0 auto 0 auto;
        justify-content: flex-end;
    }

    .top-heading h1 {
        color: #42358D;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 30px;
        font-weight: 500;
    }

    .white-area {
        width: 92%;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 15px;
        margin-bottom: 100px;
        padding: 20px 0;
        position: relative;
        padding-top: 50px;
    }

    .white-area p {
        font-size: 18px;
        line-height: 28px;
        padding: 0 20px;
        margin-bottom: 10px;
    }

    .hexagon {
        width: 12px;
        height: 12px;
        margin-right: 5px;
        background-color: #42358D;
        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
    }

    .white-area ul {
        background: #E7EAFF;

    }

    .white-area ul li {
        list-style: none;
        display: flex;
        align-items: center;
        font-size: 18px;
        margin-bottom: 10px;

    }

    .label {
        background-color: #9599AE;
        display: inline-block;
        margin-left: 20px;
        padding: 10px 15px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        position: absolute;
        top: -35px;
        left: 0px;
    }

    .label h6 {
        font-weight: 300;
        font-size: 22px;
        color: #ffffff;
    }

    .label h6 span {
        font-weight: 400;
    }

    .grey-area {
        padding: 20px;
        background-color: #9599AE;
        margin-bottom: 100px;
    }

    .grey-area p {
        color: #ffffff;
        font-size: 18px;
        font-weight: 300;

    }

    .list-one {
        padding: 20px;
        padding-left: 50px;
        margin-bottom: 20px;

    }

    .list-one li {
        font-weight: bold;
    }

    .articl-iv p:nth-child(even) {
        background-color: #E7EAFF;
    }

    .articl-iv {
        padding-top: 0px;
        padding-bottom: 0px;


    }

    .articl-iv p:nth-child(1) {
        padding-top: 20px;
    }

    .articl-iv p:last-child {
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .iv-one {
        padding-top: 50px !important;
        border-radius: 15px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    .articl-iv p {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .v-two {
        background-color: #E7EAFF;
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;
        padding-bottom: 20px !important;
        padding-top: 10px !important;
    }

    .articl-v {
        padding-bottom: 0px;

    }

    .vi-two {
        background-color: #E7EAFF;
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .white-area .vi-ul {
        background-color: #ffffff;
        padding-left: 50px;
        margin-top: 20px;
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;

    }

    .white-area .vi-ul li {
        display: block;
        padding: 20px;
    }

    .white-area .vi-ul li:nth-child(odd) {
        background-color: #E7EAFF;
    }

    .articl-vi {
        padding-bottom: 0px;
        border-bottom-right-radius: 15px !important;
        border-bottom-left-radius: 15px;
    }

    .white-area .vi-ul li:last-child {
        border-bottom-right-radius: 15px;
    }

    .articl-vii {
        padding-bottom: 0px;
    }

    .articl-vii .vii-two {
        background-color: #E7EAFF;
        padding-bottom: 20px;
        padding-top: 10px;
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .articl-viii p:nth-child(odd) {
        background-color: #E7EAFF;
    }

    .articl-ix ul {
        background-color: #ffffff;
        padding-left: 50px;
    }

    .articl-x {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .articl-x .x-1 {
        background-color: #E7EAFF;
        padding-top: 50px;
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
    }

    .articl-x .x-3 {
        background-color: #E7EAFF;
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;
        padding-bottom: 20px;
    }

    .articl-xi {
        padding-bottom: 0px;
    }

    .articl-xi .xi-2 {
        background-color: #E7EAFF;
        border-bottom-right-radius: 15px;
        border-bottom-left-radius: 15px;
        padding-bottom: 20px;
        padding-top: 10px;
    }

    .articl-xii p {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .articl-xii p:nth-child(odd) {
        background-color: #E7EAFF;
    }

    .table-x-iii, tr, td {
        border: 1px solid black;
        border-collapse: collapse;

    }

    .table-x-iii {
        width: 96%;
        table-layout: fixed;
        border: 5px solid #6177FF;
        margin: 0 auto;
        margin-top: 20px;
    }

    .table-x-iii td {
        padding-left: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 18px;
    }

    .label-vi {
        top: -60px;
    }
</style>

<div class="app-body">
    <div class="top-heading">
        <h1>Cryptocurrency Contract Asset</h1>
    </div>
    <div class="white-area">
        <p>
            This Cryptocurrency Contract Asset (CCA), is an innovative Contractual
            product that is new to the Consumer and Cryptocurrency marketplace. This
            CCA, Offers Contract Holders the opportunity to purchase a Contract
            through Cryptocurrency, which will be utilized in sum or partially, to
            provide exposure to the Cryptocurrency marketplace. Due to the
            ever-evolving Cryptocurrency marketplace, with a lack of regulatory
            oversight, it is important to note that SURPLUS DAO and this CCA is not
            registered with any Cryptocurrency based regulatory agency,
            Cryptocurrency based regulatory Commission, or Governmental Agency of
            any type whatsoever. It is governed by SURPLUS DAO. Furthermore, it is
            important to note that this CCA is NOT registered and is not being
            governed by the following:
        </p>

        <ul class="list-one">
            <li>
                <div class="hexagon"></div>
                The SEC – Securities and Exchange Commission
            </li>
            <li>
                <div class="hexagon"></div>
                FINRA – Financial Industry Regulatory Authority
            </li>
            <li>
                <div class="hexagon"></div>
                The Federal Reserve
            </li>
            <li>
                <div class="hexagon"></div>
                OCC - The Office of the Comptroller of Currency
            </li>
            <li>
                <div class="hexagon"></div>
                FDIC – The Federal Deposit Insurance Corporation
            </li>
            <li>
                <div class="hexagon"></div>
                OTS – Office of Thrift Supervision
            </li>
            <li>
                <div class="hexagon"></div>
                CFTC – Commodity Futures Trading Commission
            </li>
            <li>
                <div class="hexagon"></div>
                State Bank Regulators – In any Country, Territory, Region, or
                Province,
            </li>
            <li>
                <div class="hexagon"></div>
                State Insurance Regulators – In any Country, Territory, Region, or
                Province
            </li>
            <li>
                <div class="hexagon"></div>
                State Securities Regulators – In any Country, Territory, Region, or
                Province.
            </li>
            <li>
                <div class="hexagon"></div>
                Federal Regulatory Agency, Commission, or Administrative Body – In any
                Country, Territory, State, Region, or Province.
            </li>
        </ul>
        <p>
            Surplus DAO agrees, as indicated by the signatures below, to the terms
            set forth in this Contract.
        </p>
    </div>

    <div class="white-area">
        <div class="label">
            <h6>
                ARTICLE I <br/>
                <span>Intent And Purpose </span>
            </h6>
        </div>
        <p>
            This CCA is intended to provide you with an alternative platform to gain
            exposure to the cryptocurrency marketplace. By entering into this
            Agreement set forth herein, the provisions of this CCA will dictate the
            terms, conditions, and duties of each party, which shall be required to
            effectuate the validity of this CCA.
        </p>
    </div>

    <div class="white-area">
        <div class="label">
            <h6>
                ARTICLE II <br/>
                <span>Consideration </span>
            </h6>
        </div>
        <p>This CCA will be issued in valuable consideration of the following:</p>
        <p>1. A completed CCA application;</p>
        <p>
            2. The receipt of any ancillary documents requested by SURPLUS DAO from
            a Potential Contract Holder;
        </p>
        <p>
            3. The transfer of the Contract Value in the form of USDC Cryptocurrency
            to an Account designated by SURPLUS DAO, pursuant to the instructions
            provided by SURPLUS DAO to a Potential Contract Holder.
        </p>
    </div>

    <div class="white-area">
        <div class="label">
            <h6>
                ARTICLE III <br/>
                <span>Terms Of Cryptocurrency Contract Asset (CCA) </span>
            </h6>
        </div>
        <p>
            1. <b>Contract Purchase Value –</b> The Contract Purchase Value of this
            CCA will be $<b class="show_initial_amount"></b> in the form of USDC.
        </p>
        <p>
            2. <b>Term of CCA –</b> The term of this CCA will be <b class="show_years"></b> years <b
                class="show_months"></b> months. The <b class="show_years"></b>
            years time frame will begin within 60 days after the completion of all
            items listed within ARTICLE II.
        </p>
        <p>
            3. <b>Annual Percentage Yield –</b> The Annual Percentage Yield that
            this CCA will attempt to provide to each Contract Holder at the Maturity
            Date of this CCA will be <b>{{$record->guaranteed_rate}}%</b>
        </p>
    </div>

    <div class="white-area articl-iv">
        <div class="label">
            <h6>
                ARTICLE IV <br/>
                <span>Provisions Governing CCA</span>
            </h6>
        </div>
        <p class="iv-one">
            1. <b>Early Surrender of CCA –</b> Due to the nature of SURPLUS DAO’s
            thesis and operational purpose; structure; resulting factor(s) that an
            early surrender may harm SURPLUS DAO as a whole as well as other
            Contract Holders; a specific Contract Holder does not possess the right
            to demand payment of this CCA prior to the Date of Maturity. In the
            event that a Contract Holder requests an early surrender for extenuating
            circumstances, SURPLUS DAO will attempt to work with that Contact Holder
            so they may obtain their cryptocurrency in the form of USDC as early as
            possible. A request for early surrender from a Contract Holder made to
            SURPLUS DAO, shall be transmitted to SURPLUS DAO, in electronic
            transmission and confirmed by SURPLUS DAO. Each request for Early
            Surrender will be reviewed on a case by case basis. In the event that
            SURPLUS DAO deems it appropriate to repay a Contract Holder prior to the
            date of Maturity, SURPLUS DAO will make a good faith effort to repay the
            Contract Holder in full, along with any Potential value that has been
            accumulated. However, it should be noted that SURPLUS DAO reserves the
            right to repay the Contract Holder the Contract Value without any APY,
            minus any commissions paid minus any administrative fees.
        </p>
        <p>
            2. <b>Notice of Maturity of the CCA –</b> Once the CCA is approaching
            its maturity date of <b class="show_years"></b> years, from the Contract Start Date of <b
                class="show_months"></b> months.
            SURPLUS DAO will make its best effort to give a Notice of Maturity to
            each Contract Holder no later than 120 days prior to the date of
            Maturity.
        </p>
        <p>
            3. <b>Contract Holders Duty to Respond –</b> The Contract Holder has a
            duty to respond within 30 days from the date of the transmission of the
            Notice of Maturity. The Contract Holder shall inform SURPLUS DAO one of
            two options.
        </p>
        <p>
            <b>Option 1:</b> That the Contract Holder would like to receive the
            Anticipated Valueof the CCA at the date of Maturity.
        </p>
        <p>
            <b>Option 2:</b> That the Contract Holder would like to utilize the
            cryptocurrency that will be returned to the Contract Holder to purchase
            a new CCA or other instrument from SURPLUS DAO. The terms of any future
            CCA are subject to change.
        </p>
        <p>
            4. <b>Automatic Rollover –</b> In the event that the Contract Holder
            does NOT provide SURPLUS DAO with its request to receive his or her
            cryptocurrency on the date of Maturity within 30 days of the Notice of
            Maturity being transmitted to the Contract Holder, SURPLUS DAO, may in
            its sole discretion, place the Contract Holders cryptocurrency into the
            Contract Holders Account, place the Contract Holders cryptocurrency into
            a General Account that is earmarked for the Contract Holder, or roll
            over the full amount that the Contract Holder was entitled to, into
            another CCA with similar terms.
        </p>

        <p>
            5. <b>Payment to Contract Holder Upon Maturity of CCA –</b> SURPLUS DAO
            shall make its best efforts to return the Cryptocurrency in the form of
            USDC to the Contract Holder upon maturity of the contract. SURPLUS DAO
            reserves the right to pay the Contract Holder upon the maturity of the
            Contract in other forms of cryptocurrency, i.e. Bitcoin, Etherum, etc.
            SURPLUS DAO will attempt to make the full payment of the Maturity Value
            to the Contract Holder within 30 days of the maturity of the Contract.
        </p>
    </div>

    <div class="grey-area">
        <p>
            1 Cryptocurrency is a new technology operating with extreme volatility.
            In the event that SURPLUS DOA cannot pay the full APY of <b>{{$record->guaranteed_rate}}%</b> at the date
            of this CCA’s Maturity, due to factors including but not limited to
            economic; administrative, governmental, administrative, or future agency
            regulations, SURPLUS DOA shall not be liable to any Contract Holder for
            any amounts of cryptocurrency returned below the anticipated <b>{{$record->guaranteed_rate}}%</b> APY.
        </p>
    </div>

    <div class="white-area articl-v">
        <div class="label">
            <h6>
                ARTICLE V <br/>
                <span>Payments</span>
            </h6>
        </div>
        <p>
            1. <b>Payments to Purchase CCA –</b> USDC, which is a cryptocurrency
            shall be utilized to purchase this contract from SURPLUS DAO. SURPLUS
            DAO reserves the right to direct a Potential Contract Holder to utilize
            a different cryptocurrency to purchase this CCA.
        </p>
        <p class="v-two">
            2.Requirement to Utilize Cryptocurrency – <b> SURPLUS DAO </b> is
            selling a Cryptocurrency Contract Asset (CCA),
            <b>
                WHICH WILL BE PURCHASED WITH CRYPTOCURRENCY, AND WILL BE PAID AT
                MATURITY IN THE FORM OF CRYPTOCURRENCY. THEREFORE, SURPLUS DAO WILL
                NOT ACCEPT PAYMENT FOR THIS CCA IN THE FORM OF ANY DOLLAR OF ANY
                DENOMINATION, OR GOVERNMENTAL ISSUED FIAT. SURPLUS DAO SHALL ONLY
                UTILIZE CRYPTOCURRENCY FOR THE PURCHASE OF THIS CCA AND REPAYMENT OF
                THIS CCA AT THE DATE OF MATURITY.</b
            >
        </p>
    </div>

    <div class="white-area articl-vi">
        <div class="label label-vi">
            <h6>
                ARTICLE VI <br/>
                <span>Administrative Procedures For <br/>
            Management Of Cryptocurrency</span>
            </h6>
        </div>
        <p>
            1. <b>Requirement to Own Cryptocurrency –</b> Due to the nature of this
            CCA, any Potential Contract Holder must own Cryptocurrency prior to
            purchasing this Contract as it must be purchased in Cryptocurrency. A
            Potential Contract Holder must possess Cryptocurrency in the form of
            Cryptocurrency being requested by SURPLUS DAO. SURPLUS DAO is utilizing
            USDC for this Contract.
        </p>
        <p class="vi-two">
            2. <b>Purchase of CCA –</b> Once a Potential Contract Holder has secured
            USDC within his or her wallet, they may purchase this CCA by
            transferring USDC in the amount of $<b class="show_initial_amount"></b> to a wallet supplied by SURPLUS
            DAO.
        </p>
        <p>
            3.
            <b>Flow of Cryptocurrency from Purchase to Repayment at the Date of
                Maturity –</b>
            Once a Potential Contract Holder fulfills all documentary requirements
            and owns an amount necessary to transfer $<b class="show_initial_amount"></b> USDC to SURPLUS DAO, they may
            then purchase this CCA.
        </p>
        <ul class="vi-ul">
            <li>
                a. <b>Wallet Safeguards -</b> Wallets are secured accounts utilized to
                hold Cryptocurrency. SURPLUS DAO shall utilize independent accounting
                and audits to ensure that there is no misappropriation of
                Cryptocurrency placed in any particular wallet.
            </li>
            <li>
                b. A Potential Contract Holder must transfer $<b class="show_initial_amount"></b> USDC plus any transfer
                fees to a wallet held by SURPLUS DAO. When received, SURPLUS DAO will
                acknowledge the receipt with a written electronic confirmation. It is
                important to note that it is possible to lose cryptocurrency if you
                transfer your cryptocurrency to the wrong wallet by making an improper
                data entry, just as it is possible to lose money at a banking
                institution when entering improper data when making a wire. Therefore,
                it is critical that you follow proper procedures to effectuate the
                transfer. SURPLUS DAO will assist with any transfer to SURPLUS DAO’s
                wallet; however, SURPLUS DAO IS NOT liable for any mistakes, errors,
                or omissions made on behalf of the Potential Contract Holder in the
                event that an error occurs, including but not limited to improper data
                entry, computer failure on your behalf, hacking due to a lack of
                security on your behalf.
            </li>
            <li>
                c. Once a successful transfer is made to SURPLUS from a Potential
                Contract Holder, and the Contract Holder has fulfilled all necessary
                documentation. The CCA is binding under the terms of this CCA.
            </li>
            <li>
                d. Once the transfer has been made and documentation is finalized, and
                the CCA becomes binding, the Potential Contract Holder becomes a
                Contract Holder.
            </li>
            <li>
                e. <b>Deposit of Cryptocurrency upon Maturity of the CCA –</b> upon
                the date of maturity of this CCA, SURPLUS DAO will deposit
                cryptocurrency to the contract holder's wallet, where the Contract
                Holder may access his or her cryptocurrency. This shall occur within
                30 days or less from the date of maturity.
            </li>
        </ul>
    </div>

    <div class="white-area articl-vii">
        <div class="label">
            <h6>
                ARTICLE VII <br/>
                <span>Commissions & Administrative Fees</span>
            </h6>
        </div>
        <p>
            1. <b>Commissions –</b> SURPLUS DAO reserves the right to pay
            commissions. Commissions shall be paid to individuals and/or entities
            who have assisted Contract Holders with the purchase of this CCA.
        </p>
        <p class="vii-two">
            2. Administrative Fees – SURPLUS DAO reserves the right to pay
            Administrative Fees for the administration of this CCA. Administrative
            Fees include, but are not limited to Legal, Compliance, Administration,
            Management, Auditing, Marketing, etc.
        </p>
    </div>

    <div class="white-area articl-viii">
        <div class="label">
            <h6>
                ARTICLE VIII <br/>
                <span>Assignment & Beneficiaries</span>
            </h6>
        </div>
        <p>
            1. <b>Assignment of Contract Holders Interest –</b> A Contract Holder
            may request that SURPLUS DAO assign the Contract Holders interest in the
            CCA to a third party. This assignment shall be made on an Assignment
            Form provided by SURPLUS DAO. SURPLUS DAO has full discretion and the
            right to deny the assignment of any Contract Holder to a third party.
        </p>
        <p>
            2. <b>Non-Qualified Assignees –</b> In the event that an assignment of a
            Contract Holder’s interest is approved, SURPLUS DAO will NOT transfer
            any cryptocurrency to any Governmental agency, Administrative Body, or
            Institution of Government within any Country, State, Region, Territory
            or Province.
        </p>
        <p>
            3. <b>Beneficiary of Contract – </b> The Contract Holder must designate
            a Beneficiary of the Contract upon the purchase of the Contract if it is
            for the beneficiary of a third party. SURPLUS DAO reserves the right to
            deny the assignment to a particular Beneficiary for any reason
            whatsoever. In the event that SURPLUS DAO denies the designation of the
            Contract Holder’s beneficiary, the Contract Holder may designate another
            appropriate Beneficiary
        </p>
        <p>
            4. <b>Designation During the Contract Term -</b> A Contract Holder may
            designate a Beneficiary during term of the Contract. Unless otherwise
            stated in the Beneficiary designation, if there is more than one
            Beneficiary, they are presumed to share equally.
        </p>
        <p>
            5. <b>Change of Beneficiary -</b> The Contract Holder may change any
            Beneficiary unless otherwise provided in the previous designation. A
            change of Beneficiary will revoke any previous designation. A change
            must be made by filing a written request to SURPLUS DAO.
        </p>
        <p>
            6. <b>Death of Beneficiary -</b> Unless otherwise provided in the
            Beneficiary designation, if any Beneficiary dies before the Contract
            Holder, that Beneficiary’s interest will go to any other Beneficiaries
            named, according to their respective interests. If there are no
            Beneficiaries, the Beneficiary’s interest will pass to a contingent
            Beneficiary(s), if any. If no Beneficiary or contingent Beneficiary
            survives the Contract Holder, the death benefit will be paid in one lump
            sum to the Contract Holders estate.
        </p>
        <p>
            7. <b>Proof of Death –</b> Satisfactory Proof of Death will be a
            certificate of death, a copy of certified decree of a court of competent
            jurisdiction as to the finding of death, or any other proof that SURPLUS
            DAO deems satisfactory.
        </p>
        <p>
            8. <b>Legal Incompetence -</b> If we receive proof that a Contract
            Holder, under this CCA is legally or mentally incompetent, the Contract
            Payment may be made to any person deemed a legal representative by a
            court of competent jurisdiction or as otherwise provided by the
            prevailing law.
        </p>

        <p>
            9. <b>No Duty -</b> SURPLUS DAO does not have a duty whatsoever to any
            spouse, trust, or third party of the Contract Holder.
        </p>

        <p>
            10. <b>No Beneficiary -</b> If the Contract Holder dies and there is no
            named Beneficiary living at the time of the Contract Holder's death, the
            Contract Holders estate will be paid in one lump sum.
        </p>
        <p>
            11. <b>Proof of Life -</b> We reserve the right, at any time, require
            proof that any payee under this Contract is living when payout is
            contingent upon survival of that payee.
        </p>
    </div>

    <div class="white-area articl-ix">
        <div class="label">
            <h6>
                ARTICLE IX <br/>
                <span>Required Information To Purchase CCA</span>
            </h6>
        </div>
        <p>
            1. Required Information to Purchase Contract – A Potential Contract
            Holder must provide the following information to SURPLUS DAO prior to
            the Contract being funded in full:
        </p>
        <ul>
            <li>a. The Contract Holders name,</li>
            <li>b. The Purchase Date,</li>
            <li>c. The Maturity Date</li>
            <li>d. The Amount of the Contract Value</li>
            <li>
                e. For an individual - The full name of the Contract Holder, address,
                gender, proof of birth,
            </li>
            <li>
                f. For an entity – the Articles of Incorporation, the Operating
                Agreement or Governing Documents, a letter of Good Standing from the
                entities issuing administrative body,
            </li>
            <li>
                g. If applicable, the full name of the Beneficiary, relationship to
                Contract Holder, Address, sex.
            </li>
        </ul>
    </div>
    <div class="white-area articl-x">
        <div class="label">
            <h6>
                ARTICLE X <br/>
                <span>Termination By Future Legislation</span>
            </h6>
        </div>

        <p class="x-1">
            1. <b>Termination of the CCA by SURPLUS DAO –</b> SURPLUS DAO is
            currently not regulated by a governmental agency of any particular
            jurisdiction. In the event that you preside in a jurisdiction that
            enacts future legislation prior to the Maturity date of this CCA,
            SURPLUS DAO reserves the right to continue operations under the terms of
            this CCA and the Contract Holder waives any and all right to bring any
            injunctive actions to force an early termination of this CCA.
        </p>
        <p>
            2. <b>Early Termination -</b> Improper Actions of the Contract Holder
            that jeopardize the integrity of SURPLUS DAO will result in the early
            termination of the CCA held by that individual or entity. Improper
            Actions refer but are not limited to fraud, misrepresentations of
            material fact to SURPLUS DAO, attempted acts to breach SURPLUS DAO’s
            security, etc.
        </p>

        <p class="x-3">
            3. <b>Notice of Termination –</b> SURPLUS DAO shall provide written
            notice for early termination via electronic submission to the Contract
            Holder if it deems necessary to terminate the Contract.
        </p>
    </div>

    <div class="white-area articl-xi">
        <div class="label">
            <h6>ARTICLE XI <br> <span>Responsibilities & Duties Of Contract Holder</span></h6>
        </div>
        <p>1. <b>Full Disclosure to SURPLUS DAO –</b> A Potential Contact Holder has a duty to fully and accurately
            disclose all
            information to SURPLUS DAO.</p>
        <p class="xi-2">2. <b>Duty to Seek Independent Counsel -</b> A Potential Contract Holder is recommended to hire
            legal counsel of his or
            her choosing prior to purchasing this CCA. Any written or verbal communication(s) from any individual(s) of
            SURPLUS DAO are not and shall not be construed as legal advice. SURPLUS DAO owes no duty to a Potential
            Contract Holder in the event that the Contract Holder waives his or her right to consult with competent
            independent
            legal counsel of his or her choosing. SURPLUS DAO will be permitted to rely conclusively upon any statement
            by
            you or information provided upon your behalf. Furthermore, you waive any rights against SURPLUS DAO if you
            engage in business practices with an individual who is not a member of SURPLUS DAO, but represents himself
            or
            herself to be an agent or representative of SURPLUS DAO.</p>
    </div>
    <div class="white-area articl-xii">
        <div class="label">
            <h6>
                ARTICLE XII <br/>
                <span>Contractual Interpretation</span>
            </h6>
        </div>
        <p>
            1. <b>Entire Contract -</b> This CCA Contract, including any
            Attachments, Schedules, and Endorsements, constitute the entire Contract
            between you, the Potential Contract Holder, the Contract Holder, and
            SURPLUS DAO. We are responsible for performing only those duties,
            obligations, and responsibilities specifically described in this
            Contract.
        </p>
        <p>
            2. <b>Amendments to Contract – </b> This CCA may only be amended by
            mutual written agreement by both parties. Said amendments may be in the
            form of digital transmission.
        </p>
        <p>
            3. <b>Authority to Execute Amendments –</b> The only individuals
            authorized to amend this CCA on behalf of SURPLUS DAO are our CEO or
            President. You the Contract Holder have the sole authority to execute an
            Amendment to this CCA, no other person has the authority to sign a
            Contract, amend this Contract, or waive any provision of this Contract
            on our behalf.
        </p>
        <p>
            4. <b>Modification -</b> We may unilaterally modify any provision of
            this Contract without your consent in order to comply with applicable
            laws or regulations or future enactments or laws or regulations that
            SURPLUS DAO perceives necessary to be in compliance with future
            legislation. You will be provided advance written notice of any such
            compliance changes.
        </p>
        <p>
            5. <b>Jurisdiction of Contract –</b> This Contract is not currently
            regulated under any legal jurisdiction of any Country, Region,
            territory, province, etc. This CCA is being governed by the terms of
            SURPLUS DAO. Furthermore, a Contract Holder waives all rights to bring
            any future legal proceedings against SURPLUS DAO in any court of any
            jurisdiction and acknowledges that the terms of SURPLUS DAO govern all
            issues pertaining to this CCA.
        </p>
        <p>
            6. <b>Binding Arbitration -</b> In the event that a dispute arises
            between a Contract Holder and SURPLUS DAO, the Contract Holder waives
            any and all rights to file a legal proceeding in Court against SURPLUS
            DAO. Both parties shall utilize binding arbitration in the event that a
            dispute arises that cannot be reconciled. The Contract Holder, by
            entering into this contract waives the right to decide the jurisdiction
            in which binding arbitration shall occur. SURPLUS DAO shall choose the
            jurisdiction it believes to be appropriate for binding arbitration.
            Binding arbitration will consist of a panel of three arbitrators. The
            Contract Holder shall appoint one Arbitrator of his or her choosing to
            represent his or her interest. SURPLUS DAO shall appoint an arbitrator
            of its choosing to represent SURPLUS DAO. The appointed arbitrators
            shall then mutually agree on a third, neutral arbitrator. The rules of
            the arbitration at the chosen jurisdiction, shall govern the rules,
            policies, and laws of said arbitration.
        </p>
        <p>
            7. <b>Non-Waiver –</b> Our failure to enforce any provision of this CCA
            at any time shall not affect our right, by doctrine of waiver, estoppel,
            or otherwise, to enforce that provision or any other provision at any
            other time.
        </p>
    </div>
    <div class="white-area">
        <p>
            SURPLUS DAO will make its best efforts to report annually to a Contract
            Holder regarding the status of the Contract. This report will be a
            digital transmission.
        </p>
    </div>
    <div class="white-area">
        <p>
            By electronically signing your Signature below, you agree to be bound, pursuant to all terms of this <b>Contract.</b>
        </p>
        <table class="table-x-iii">
            <tr>
                <td>Signature</td>
                <td>Date</td>
            </tr>
            <tr>
                <td>
                    <div class="p-2">
                        <img src="{!! $record->signature !!}" alt="">
                    </div>
                </td>
                <td><h2>{{date('m/d/Y',strtotime($record->created_at))}}</h2></td>
            </tr>
        </table>
    </div>
</div>
