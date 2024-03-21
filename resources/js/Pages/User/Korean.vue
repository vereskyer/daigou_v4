<!-- YourComponent.vue -->
<template>
    <Layouts>
        <div class="grid grid-cols-1 divide-y">

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">1</span>
                    <span class="text-center flex-grow font-bold">您好！</span>
                </div>
                <div>
                    <CopyToClipboard id="hello" label="Label" text="안녕하세요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">谢谢！</span>
                </div>
                <div>
                    <CopyToClipboard id="thanks" label="Label" text="감사합니다!" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">2</span>
                    <span class="text-center flex-grow font-bold">請問這個有嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="do-you-have-this" label="Label" text="이거 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold  bg-blue-500 text-white">3</span>
                    <span class="text-center flex-grow font-bold  bg-blue-500 text-white">還有庫存嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="do-you-have-stock" label="Label" text="재고 아직 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">4</span>
                    <span class="text-center flex-grow font-bold">這個多少錢？</span>
                </div>
                <div>
                    <CopyToClipboard id="how-much" label="Label" text="이거 얼마에요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">5</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">老闆，我要訂貨哦</span>
                </div>
                <div>
                    <CopyToClipboard id="order-now" label="Label" text="사장님. 주문이요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">6</span>
                    <span class="text-center flex-grow font-bold">這個斷貨了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="out-of-stock" label="Label" text="사장님. 이거 품절 됬어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">7</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">這個什麼時候出來？</span>
                </div>
                <div>
                    <CopyToClipboard id="when-coming" label="Label" text="이거 언제 쯤 나와요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">8</span>
                    <span class="text-center flex-grow font-bold">這個是再生產中嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="re-order" label="Label" text="이거 리오더중이요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">這個还会再出来吗？</span>
                </div>
                <div>
                    <CopyToClipboard id="re-coming" label="Label" text="다시 나와요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">9</span>
                    <span class="text-center flex-grow font-bold">出來小票給我一個</span>
                </div>
                <div>
                    <CopyToClipboard id="give-me-a-receipt" label="Label" text="장기 나오면 좀 보내주세요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white bg-blue-500 text-white">10</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white bg-blue-500 text-white">晚上讓大叔去取</span>
                </div>
                <div>
                    <CopyToClipboard id="send-ancle-tonight" label="Label" text="밤에 삼촌 보낼게요" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">11</span>
                    <span class="text-center flex-grow font-bold">明天晚上讓大叔去取</span>
                </div>
                <div>
                    <CopyToClipboard id="send-ancle-tomorrow" label="Label" text="내일 밤에 삼촌 보낼게요" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white bg-blue-500 text-white">12</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white bg-blue-500 text-white">檔口問：怎麼付款？</span>
                </div>
                <div>
                    <CopyToClipboard id="how-to-pay" label="Label" text="결제 어덯게 할까요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">答：大叔代付</span>
                </div>
                <div>
                    <CopyToClipboard id="ancle-pay" label="Label" text="대납이요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white bg-blue-500 text-white">13</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white bg-blue-500 text-white">檔口問怎麼取貨</span>
                </div>
                <div>
                    <CopyToClipboard id="will-send-ancle" label="Label" text="삼촌 보낼게요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">14</span>
                    <span class="text-center flex-grow font-bold">出來新款了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="new-item" label="Label" text="신상 나왔어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">春季新款出來了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="spring-new-item" label="Label" text="봄 신상 나왔어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">夏天新款出來了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="summer-new-item" label="Label" text="여름 신상 나왔어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">秋季新款出來了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="autumn-new-item" label="Label" text="가을 신상 나왔어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">冬季新款出來了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="winter-new-item" label="Label" text="겨울 신상 나왔어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">15</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">老闆，可以便宜點嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="can-i-pay-cheaper" label="Label" text="사장님. 좀 싸게 주실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">什麼時候開始打折？</span>
                </div>
                <div>
                    <CopyToClipboard id="when-to-start-discount" label="Label" text="세일 언제 시작해요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">給5%的折扣唄</span>
                </div>
                <div>
                    <CopyToClipboard id="5-percent-discount" label="Label" text="5% DC 좀 주 실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">給10%的折扣唄</span>
                </div>
                <div>
                    <CopyToClipboard id="10-percent-discount" label="Label" text="10% DC 좀 주 실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">16</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">我會一直訂貨的</span>
                </div>
                <div>
                    <CopyToClipboard id="i-will-always-order" label="Label" text="계속 주문할게요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">17</span>
                    <span class="text-center flex-grow font-bold">定多少的量，能便宜點呢？</span>
                </div>
                <div>
                    <CopyToClipboard id="how-much-quantity" label="Label" text="수량 얼마나 되면 좀 싸게 주실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">18</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">檔口問是哪裡的客人的時候</span>
                </div>
                <div>
                    <CopyToClipboard id="where-is-the-customer" label="Label" text="어디에요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">我是台灣的</span>
                </div>
                <div>
                    <CopyToClipboard id="i-from-taiwan" label="Label" text="대만이요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">我是香港的</span>
                </div>
                <div>
                    <CopyToClipboard id="i-from-hongkong" label="Label" text="홍콩이요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">19</span>
                    <span class="text-center flex-grow font-bold">這個是什麼材質的？</span>
                </div>
                <div>
                    <CopyToClipboard id="what-material" label="Label" text="이거 무슨 제질이에요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">20</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">童裝訂貨，問是不是可以選碼定貨</span>
                </div>
                <div>
                    <CopyToClipboard id="is-it-possible-to-order-size" label="Label" text="사장님. 낱장 주문 도 되요?"
                        inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">21</span>
                    <span class="text-center flex-grow font-bold">童裝訂貨:我要整手訂貨</span>
                </div>
                <div>
                    <CopyToClipboard id="order-all-size" label="Label" text="고미로 주문할게요" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">22</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">老闆，幫我寫這個名字</span>
                </div>
                <div>
                    <CopyToClipboard id="write-my-name" label="Label" text="마이클-xxx 이름으로 적어주세요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">23</span>
                    <span class="text-center flex-grow font-bold">什麼時候可以取貨？</span>
                </div>
                <div>
                    <CopyToClipboard id="when-can-i-receive" label="Label" text="언제 픽업하면 되요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">24</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">幫我抓未送（先付款留貨）</span>
                </div>
                <div>
                    <CopyToClipboard id="grab-unpaid" label="Label" text="사장님. 미송 잡아주세요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">25</span>
                    <span class="text-center flex-grow font-bold">老闆，未送出來了嗎？</span>
                </div>
                <div>
                    <CopyToClipboard id="unpaid-when-come-out" label="Label" text="사장님.미송 나왔어요?." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">26</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white"> 老闆，這個還沒有收到。</span>
                </div>
                <div>
                    <CopyToClipboard id="i-didn't-receive" label="Label" text="사장님. 이거 아직 안 받았어요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">27</span>
                    <span class="text-center flex-grow font-bold">什麼時候發貨了？</span>
                </div>
                <div>
                    <CopyToClipboard id="when-shipment" label="Label" text="언제 보냈어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">28</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">最少多少可以訂貨？</span>
                </div>
                <div>
                    <CopyToClipboard id="least-quantity" label="Label" text="최소 수량은 어떡해요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">29</span>
                    <span class="text-center flex-grow font-bold">收到瑕疵：这件衣服有瑕疵哦</span>
                </div>
                <div>
                    <CopyToClipboard id="defect-cloth" label="Label" text="사장님. 이거 불량이에요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">30</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">问是否可以退款（一般是不给退款的）</span>
                </div>
                <div>
                    <CopyToClipboard id="refund-able" label="Label" text="사장님. 이거 환불해주실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">31</span>
                    <span class="text-center flex-grow font-bold">问是否可以交换（退而求其次）</span>
                </div>
                <div>
                    <CopyToClipboard id="exchange-able" label="Label" text="사장님. 이거 교환해주실 수 있어요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold bg-blue-500 text-white">32</span>
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">姐姐真棒！</span>
                </div>
                <div>
                    <CopyToClipboard id="sister-very-good" label="Label" text="언니 짱이요!" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold">老板真棒！</span>
                </div>
                <div>
                    <CopyToClipboard id="boss-very-good" label="Label" text="사장님 짱이요!" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">今年款式真棒！</span>
                </div>
                <div>
                    <CopyToClipboard id="style-very-good" label="Label" text="올해 디잔인 짱이요!" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">33</span>
                    <span class="text-center flex-grow font-bold">麦克白天干活，晚上电话关机，（因为很多档口凌晨两三点打电话，囧）</span>
                </div>
                <div>
                    <CopyToClipboard id="cannot-call-night" label="Label" text="마이클 낮에 일이 있어서 밤에 전화 못 받아요."
                        inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-center flex-grow font-bold bg-blue-500 text-white">请发短信，晚上让大叔去取</span>
                </div>
                <div>
                    <CopyToClipboard id="send-another-ancle" label="Label" text="문자로 부탁해요. 밤에 삼춘 보낼게요." inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>
        </div>
    </Layouts>
</template>

<script setup>
// 导入所需的组件
import Layouts from './components/Layouts.vue';
import CopyToClipboard from './components/CopyToClipboard.vue';
</script>